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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//$router->group(['middleware'=>'auth'],function()use($router){});


$router->get('/autor',['uses'=>'AutorController@Obtenerautor']);

$router->get('/pais',['uses'=>'PaisController@ObtenerPais']);

$router->get('/itinerario',['uses'=>'ConferenciasController@VerConferecias']);

$router->post('users/login', 'UserController@login');

//$router->get('/login',['uses'=>'LoginController@BuscarUsuario']);