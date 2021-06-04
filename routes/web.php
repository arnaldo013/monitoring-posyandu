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


Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
//Lansia
Route::get('/lansia','LansiaController@index');
Route::get('/lansia/create','LansiaController@create');
Route::post('/lansia','LansiaController@store');
Route::get('/lansia/{id}','LansiaController@show');
Route::get('/lansia/{id}/monitoring','LansiaController@monitoring');
Route::post('/monitoring','LansiaController@storee');
Route::get('/lansia/edit/{id}','LansiaController@edit');
Route::put('/lansia/edit/{id}','LansiaController@update');
Route::get('/lansia/hapus/{id}','LansiaController@destroy');

//Kader
Route::get('/kader','KaderController@index');
Route::get('/kader/create','KaderController@create');
Route::post('/kader','KaderController@store');
Route::get('/kader/edit/{id}','KaderController@edit');
Route::put('/kader/edit/{id}','KaderController@update');
Route::get('/kader/hapus/{id}','KaderController@destroy');


//Pendamping
Route::get('/pendamping','PendampingController@index');
Route::get('/pendamping/create','PendampingController@create');
Route::post('/pendamping','PendampingController@store');
Route::get('/pendamping/hapus/{id}','PendampingController@destroy');

//Monitoring
Route::get('/monitoring','MonitoringController@index');
//Fuzzy
Route::get('/fuzzy','LansiaController@fuzzy');
Route::get('/fuzzy/create','LansiaController@buatfuzzy');
Route::post('/fuzzy','LansiaController@storefuzzy');
//Alfa
Route::get('/alfa','LansiaController@alfa');
Route::get('/alfa/create','LansiaController@buatalfa');
Route::post('/alfa','LansiaController@storealfa');
//Himpunan
Route::get('/himpunan','LansiaController@himpunan');
//Variabel
Route::get('/variabel','LansiaController@variabel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


