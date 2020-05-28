<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Http\Response;

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

$router->get('/', function() use ($router){
    return response()
        ->json(["characters" => url("/api/character")], 200, [], JSON_UNESCAPED_SLASHES);
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('character', "CharactersController@index");
    $router->get('character/{id}', "CharactersController@show");
});