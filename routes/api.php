<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List Articles
Route::get('articles', 'ArticleController@index');

//List Single Article
Route::get('article/{id}', 'ArticleController@show');

//create new article
Route::Post('article', 'ArticleController@store');

//Update article
Route::put('article', 'ArticleController@store');

//Delete article
Route::delete('article/{id}', 'ArticleController@destroy');
