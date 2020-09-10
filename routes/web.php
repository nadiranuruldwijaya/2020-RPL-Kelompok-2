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


//ROUTE POST


Route::group(['middleware'=>'DisablePreventBack'], function()
{
	Auth::routes();
	Route::get('/home','HomeController@index');
	Route::get('/home', 'HomeController@index')->name('home'); 

	Route::get('categories/{categories:slug}','CategoryController@show')->name('categories.show');
	Route::get('tags/{tags:slug}','TagController@show')->name('tags.show');



	Route::get('/post','PostController@index')->name('post.index'); 

	Route::get('/post/create','PostController@create')->name('post.create');
	Route::post('/post/store','PostController@store'); 

	Route::get('/post/{post:slug}/edit','PostController@edit')->name('post.edit'); 
	Route::patch('/post/{post:slug}/edit','PostController@update')->name('post.edit');


	Route::delete('post/{post:slug}/delete','PostController@destroy')->name('post.delete');
	Route::get('post/{post:slug}', 'PostController@show')->name('post.show'); 


});



















