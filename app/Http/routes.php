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


Route::get('/admin/categories', [ 'uses' => 'CategoriesController@index', 'as' => 'admin.categories.index'] );
Route::get('/admin/categories/create', [ 'uses' => 'CategoriesController@create', 'as' => 'admin.categories.create'] );
Route::get('/admin/categories/edit/{id}', [ 'uses' => 'CategoriesController@edit', 'as' => 'admin.categories.edit'] );
Route::post('/admin/categories/store', [ 'uses' => 'CategoriesController@store', 'as' => 'admin.categories.store'] );
Route::post('/admin/categories/update/{id}', [ 'uses' => 'CategoriesController@update', 'as' => 'admin.categories.update'] );


// Exemplo de uso do Repository
Route::get('/test', function () {

    // Instancia diretamente o repository:
    $repository = app()->make('CodeDelivery\Repositories\CategoryRepository');
    return $repository->all();



});