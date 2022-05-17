<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('api', function () use ($app) {
    return [
    	'nombre' => "Cesar Herrera"
    ];
});

$app->get('/' , function(){
	return view('main');
});

$app->get('quienes_somos' , function(){
	return view('layouts/about_us');
});


$app->get('servicios' , function(){
	return view('layouts/services');
});

$app->get('clientes' , function(){
	return view('layouts/customers');
});

$app->get('contacto' , function(){
	return view('layouts/contact');
});







$app->get('user/{user}' , function($userId){
	return $userId;
});