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

Route::get('/','FirstController@home')
    ->name('home');

Route::get('/about/{id}', 'FirstController@show');

Route::get('/articles', ['uses' => 'Admin\CoreController@getArticles', 'as' => 'article']);
Route::get('/article/{page}',
    ['uses' => 'Admin\CoreController@getArticle',
        'as' => 'article'])->middleware('myMiddle:admin');

//list pages
//Route::resource('/pages','Admin\CoreResource',['only'=>['index','show']]);


