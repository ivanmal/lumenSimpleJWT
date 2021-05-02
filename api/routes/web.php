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
    return 'API GATEWAY - v ' . env('VERSION_APP') . ' Copyright &copy; 2006-' . date('Y')
        . ' https://www.duosystem.com.br/';
});

$router->group(['middleware' => 'auth', 'prefix' => 'auth'], function () use ($router) {
    $router->get('user', 'AuthController@user');
    $router->post('register', 'AuthController@register');
    $router->post('refresh', 'AuthController@refresh');
    $router->get('logout', 'AuthController@logout');
});

$router->group(['prefix' => 'auth'], function () use ($router) {


    $router->post('login', 'AuthController@login');
});
