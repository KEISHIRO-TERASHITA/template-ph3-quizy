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

use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;


Route::get('/', function () {
    return view('welcome');
});

Route::get('quiz/{big_question_id?}', 'QuizController@index');
Route::get('test', 'QuizController@test');

Route::get('hello', 'HelloController@index')->middleware(HelloMiddleware::class);
Route::post('hello', 'HelloController@post');