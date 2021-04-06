<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () {
    return view('home');
});

$router->group(['prefix' => 'books'], function() use ($router) {
    $router->get('/', 'CrudController@index');
    $router->get('/create', 'CrudController@create');
});
