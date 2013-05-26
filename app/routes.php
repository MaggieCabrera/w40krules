<?php

Route::get('/', function()
{
	//$rules = DB::table('rules')->get(); //->get() Select * from rules ->first() para el primero
	//dd($posts);//die and dump
	return View::make('home.index');
});
/*
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

});*/

Route::resource('rules', 'RulesController');