<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/videos', 'VideosController@index')->name('videos');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');
Route::get('/disclaimer', 'HomeController@disclaimer')->name('disclaimer');
Route::get('/returns', 'HomeController@returns')->name('returns');