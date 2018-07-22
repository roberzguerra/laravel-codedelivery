<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Exemplo de uso do Repository
Route::get('/test', function () {

    // Instancia diretamente o repository:
    $repository = app()->make('CodeDelivery\Repositories\CategoryRepository');
    return $repository->all();



});