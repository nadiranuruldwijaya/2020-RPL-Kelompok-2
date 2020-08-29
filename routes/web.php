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

//ROUTE POST

Route::get('categories/{category:slug}','CategoryController@show')->name('categories.show');
Route::get('tags/{tag:slug}','TagController@show')->name('tags.show');



Route::get('/post','PostController@index')->name('post.index'); 

Route::get('/post/create','PostController@create')->name('post.create');
Route::post('/post/store','PostController@store'); 

Route::get('/post/{id}/edit','PostController@edit'); 
Route::patch('/post/{id}/edit','PostController@update');


Route::delete('/post/{post:slug}/delete','PostController@destroy')->name('post.delete');
Route::get('post/{post:slug}', 'PostController@show')->name('post.show'); 

Route::group(['middleware'=>'DisablePreventBack'], function(){
	Auth::routes();
	Route::get('/home','HomeController@index');
});

















//NEW

Route::get('/siswa','SiswaController@index')->name('siswa.index'); 

Route::get('/siswa/create','SiswaController@create')->name('siswa.create'); 
Route::post('/siswa/store','SiswaController@store')->name('siswa.store');  
Route::get('/siswa/{siswa}/edit','SiswaController@edit')->name('siswa.edit');

Route::post('/siswa/{siswa}/update','SiswaController@update')->name('siswa.update'); 
Route::get('/siswa/{siswa}/destroy','SiswaController@destroy')->name('siswa.destroy');

