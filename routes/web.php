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

Route::get('/', function () {
    return view('welcome');
});

//DONE debugbar

//DONE composer require sven/artisan-view --dev

//DONE composer require --dev ajthinking/tinx

//DONE composer require spatie/laravel-permission

//DONE composer require --dev pipe-dream/laravel

//DONE spatie vendor published

//DONE php artisan make:auth

//DONE php artisan storage:link

//DONE register route set to false

//DONE  npm install tailwindcss

//DONE npx tailwind init

//DONE update webpack.mix.js -> for tailwind, browser sync

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
