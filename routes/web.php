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
//kegunaan baris ke 16-17 yaitu route ini untuk menangani request di url yang selanjutnya akan memanggil halaman tertentu, tanda slash (/) yaitu berada dihalaman utama (home), lalu return view yaitu memanggil langsung ke blade yang bernama welcome
Route::get('/', function () {    
    return view('welcome'); 
});

Auth::routes(); //ini adalah class helper yang kegunaanya mengenerate semua route untuk aunthentikasi

Route::get('/home', 'HomeController@index')->name('home'); //helper ini digunakan untuk routing login, register, dan home setelah user berhasil login

//NEW

Route::get('/siswa','SiswaController@index')->name('siswa.index'); //kegunaanya helper ini yaitu mengarahkan route /siswa pada controller SiswaController dengan method GET. @index yaitu akan mengarah ke function index dan memanggil siswa.index di controller

Route::get('/siswa/create','SiswaController@create')->name('siswa.create');  //kegunaanya helper ini yaitu mengarahkan route /siswa/create pada controller SiswaController dengan method GET. @create yaitu akan mengarah ke function create dan memanggil siswa.create di controller

Route::post('/siswa/store','SiswaController@store')->name('siswa.store');  //kegunaanya helper ini yaitu mengarahkan route /siswa/store pada controller SiswaController dengan method POST. @store yaitu akan mengarah ke function store dan memanggil siswa.store di controller


Route::get('/siswa/{siswa}/edit','SiswaController@edit')->name('siswa.edit'); //kegunaanya helper ini yaitu mengarahkan route /siswa/edit ke function edit pada controller SiswaController dengan method GET. {siswa} adalah parameter yang harus ada pada url-nya yang nantinya parameter tersebut dilempar ke controller dan memanggil siswa.edit

Route::post('/siswa/{siswa}/update','SiswaController@update')->name('siswa.update'); //kegunaanya helper ini yaitu mengarahkan route /siswa/update ke function update pada controller SiswaController dengan method POST. {siswa} adalah parameter yang harus ada pada url-nya yang nantinya parameter tersebut dilempar ke controller dan memanggil siswa.update

Route::get('/siswa/{siswa}/destroy','SiswaController@destroy')->name('siswa.destroy'); //kegunaanya helper ini yaitu mengarahkan route /siswa/destroy ke function destroy pada controller SiswaController dengan method GET. {siswa} adalah parameter yang harus ada pada url-nya yang nantinya parameter tersebut dilempar ke controller dan memanggil siswa.destroy

//ROUTE POST

Route::get('/post','PostController@index')->name('post.index'); //kegunaanya helper ini yaitu mengarahkan route /post pada controller PostController dengan method GET. @index yaitu akan mengarah ke function index dan memanggil post.index di controller

Route::post('/post/store','PostController@store'); //kegunaanya helper ini yaitu mengarahkan route /post/store pada controller PostController dengan method POST. @store yaitu akan mengarah ke function store di controller

Route::get('/post/create','PostController@create'); //kegunaanya helper ini yaitu mengarahkan route /post/create pada controller PostController dengan method GET. @create yaitu akan mengarah ke function create di controller

Route::get('/post/{id}/edit','PostController@edit'); //kegunaanya helper ini yaitu mengarahkan route /post/edit ke function edit pada controller PostController dengan method GET. {id} adalah parameter yang harus ada pada url-nya yang nantinya parameter tersebut dilempar ke controller.

Route::post('/post/{id}/update','PostController@update'); //kegunaanya helper ini yaitu mengarahkan route /post/update ke function update pada controller PostController dengan method POST. {id} adalah parameter yang harus ada pada url-nya yang nantinya parameter tersebut dilempar ke controller.

Route::get('/post/{id}/destroy','PostController@destroy');//kegunaanya helper ini yaitu mengarahkan route /post/destroy ke function destroy pada controller PostController dengan method GET. {id} adalah parameter yang harus ada pada url-nya yang nantinya parameter tersebut dilempar ke controller.

Route::get('post/{post:slug}', 'PostController@show'); //kegunaanya helper ini yaitu mengarahkan route /post/edit ke function edit pada controller PostController dengan method GET. {id} adalah parameter yang harus ada pada url-nya yang nantinya parameter tersebut dilempar ke controller.

