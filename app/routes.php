<?php

/*Route::get('/', function()
{
	//$rules = DB::table('rules')->get(); //->get() Select * from rules ->first() para el primero
	//dd($posts);//die and dump
	return View::make('home.index');
});*/
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

Route::get('/', 'HomeController@firstPage');

Route::resource('rules', 'RulesController');

Route::resource('armies', 'ArmiesController');

View::composer('parts.menu', function($view){
    $view->with('menuitems', Menu::all());
});

Route::resource('characters', 'CharactersController');

Route::resource('units', 'UnitsController');

Route::resource('weapons', 'WeaponsController');

Route::resource('character_types', 'Character_typesController');

Route::resource('unittypes', 'UnittypesController');// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'user/login',                  'UserController@login');
Route::post('user/login',                  'UserController@do_login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');
Route::get( 'user/forgot_password',        'UserController@forgot_password');
Route::post('user/forgot_password',        'UserController@do_forgot_password');
Route::get( 'user/reset_password/{token}', 'UserController@reset_password');
Route::post('user/reset_password',         'UserController@do_reset_password');
Route::get( 'user/logout',                 'UserController@logout');