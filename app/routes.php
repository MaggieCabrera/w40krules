<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('/', function()
{
	//$rules = DB::table('rules')->get(); //->get() Select * from rules ->first() para el primero
	//dd($posts);//die and dump
	return View::make('home.index');
});

Route::post('/', function()
{
	//return 'posted';
	$name = Input::get('name');
	$description = Input::get('description');

	//Validar
	$v= Rule::validate(array('name' => $name, 'description' => $description));

	if($v!==true){
		return Redirect::to('/')->withErrors($v);
	}

	//Comprobar que no está repetido
	$record = Rule::where('name', 'LIKE', $name)->first();
	if($record){
		return 'ya existe!';
	}

	//añadir a db
	$row = Rule::create(array(
		'name' => $name,
		'description' => $description
	));

	//crear un view con el resultado
	if($row){
		return View::make('home.result')->with('name', $row->name);
	}

});

Route::get('reglas', function()
{
	return View::make('home.reglas');
});

Route::resource('rules', 'RulesController');