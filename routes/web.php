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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MainController@index');
Route::get('/filosofi-logo', 'MainController@filosofi');
Route::get('/profil', 'MainController@profil');
Route::get('/adart-yayasan', 'MainController@adart');
Route::get('/hubungi-kami', 'MainController@hubungi_kami');
Route::get('/galery', 'MainController@galeri');
Route::get('/p/{p}', 'MainController@post');


Auth::routes();

Route::group(['prefix' => 'author'], function () {

	Route::group(['namespace' => 'author'], function () {

		Route::get('/', 'AuthorController@index');	
		Route::get('/dashboard', 'AuthorController@index');	
		Route::get('/tambah-berita', 'BeritaAuthorController@add');	
		Route::post('/tambah-berita', 'BeritaAuthorController@add_berita')->name('tambahberita');	
		Route::get('/editBerita/{id}', 'BeritaAuthorController@editBerita');	
		Route::post('/editBerita', 'BeritaAuthorController@saveEditBerita')->name('editBerita');			
		Route::get('/berita', 'BeritaAuthorController@index');	
		Route::get('/hapusBerita/{id}', 'BeritaAuthorController@hapusBerita');	
	});
});
