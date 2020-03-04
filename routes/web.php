<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PostController@index');

Route::resource('posts', 'PostController');

//Route::get('/post/{id}', 'PostController@show');

Route::get('/user/{user_id}/add-skill/{skill_id}/', 'TestController@testFunction');
/*Route::get('/', 'PagesController@index');*/