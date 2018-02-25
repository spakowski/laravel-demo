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
*/


//dd(resolve('App\Billing\Stripe'));
//$stripe=App::make('App\Billing\Stripe');

Route::get('/', function () {
    $name = 'Adi';
    $age = 30+8;
    return view('layout', compact('name','age'));

});

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/post', 'PostController@index');
Route::post('/post', 'PostController@store');

Route::get('/post/tags/{tag}','TagsController@index');

Route::get('/post/create', 'PostController@create');
Route::get('/post/{post}', 'PostController@show');
Route::post('/post/{post}/comments', 'CommentsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
