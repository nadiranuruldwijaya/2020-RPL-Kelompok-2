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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//NEW

Route::get('/siswa','SiswaController@index')->name('siswa.index');
Route::get('/siswa/create','SiswaController@create')->name('siswa.create');
Route::post('/siswa/store','SiswaController@store')->name('siswa.store');

Route::get('/siswa/{siswa}/edit','SiswaController@edit')->name('siswa.edit');
Route::post('/siswa/{siswa}/update','SiswaController@update')->name('siswa.update');
Route::get('/siswa/{siswa}/destroy','SiswaController@destroy')->name('siswa.destroy');

//ROUTE POST

Route::get('/post','PostController@index')->name('post.index');
Route::post('/post/store','PostController@store');
Route::get('/post/create','PostController@create');
Route::get('/post/{id}/edit','PostController@edit');
Route::post('/post/{post:slug}/update','PostController@update');
Route::get('/post/{id}/destroy','PostController@destroy');
Route::get('post/{post:slug}', 'PostController@show');

