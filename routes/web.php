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

$router->get('/', ['as' => 'home', function () {
    return view('home');
}]);

$router->group(['prefix' => 'books'], function() use ($router) {
    $router->get('/', ['uses' => 'CrudController@index', 'as' => 'books.index']);
    $router->get('/create', 'CrudController@create');
    $router->post('/create', ['uses' => 'CrudController@store', 'as' => 'books.store']);
    $router->get('/edit/{id}', ['uses' => 'CrudController@edit', 'as' => 'books.edit']);
    $router->put('/update/{id}', ['uses' => 'CrudController@update', 'as' => 'books.update']);
    $router->delete('/delete/{id}', ['uses' => 'CrudController@destroy', 'as' => 'books.delete']);
});
