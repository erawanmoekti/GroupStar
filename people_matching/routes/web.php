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

$router->get('/', function () {
    return 'Pepole Matching API (by. Erawan Mukti)';
});

$router->post('user', 'UserController@store');
$router->post('friend', 'UserFriendController@store');
$router->get('users', 'UserController@index');
$router->get('user/find/{id}', 'UserController@show');
$router->get('user/match', 'UserController@match');