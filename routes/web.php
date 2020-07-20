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

Route::get('/dev', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/interviews', 'PagesController@interviews');
Route::get('/privacy', 'PagesController@privacy');

Route::get('/index', 'PostsController@index');
Route::get('/articles', 'PostsController@articles');

Route::get('/contributors', 'ContributorsController@base');

Route::get('/surveys', 'SurveysController@survey');
Route::get('/personal', 'SurveysController@personal');
Route::get('/employment', 'SurveysController@employment');
Route::get('/family', 'SurveysController@family');

Route::resource('posts', 'PostsController');

// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// }
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');



