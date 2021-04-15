<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/menu',[
    'uses'=>'FoodController@show', 
    'as'=>'all.food'
]);

Route::get('/insertFood',[
    'uses'=>'FoodController@create',
    'as'=>'food'
]);

Route::get('/insertCa',[
    'uses'=>'CategoryController@create',
    'as'=>'category'
]);

Route::get('/control',[
    'uses'=>'FoodController@editshow'
]);

Route::post('/addFood/store',[
    'uses'=>'FoodController@store',
    'as'=>'addFood.store'
]);

Route::post('/addCategory/store',[
    'uses'=>'CategoryController@store',
    'as'=>'addFoodCategory.store'
]);

Route::get('/control/delete/{id}',[
    'uses'=>'FoodController@delete', 
    'as'=>'delete.food'
]);
 
Route::get('/editFood/{id}',[
    'uses'=>'FoodController@edit', 
    'as'=>'edit.food'
]);

Route::post('updatefood', [
    'uses'=>'FoodController@update',
    'as' => 'update.food'
]);

Route::post('searchproduct', [
    'uses'=>'FoodController@search',
    'as' => 'search.food'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
