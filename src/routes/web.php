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

use App\Http\Middleware\HelloMiddleware;


Route::get('/', function () {
    return view('welcome');
});
Route::get('hello', 'HelloController@index')->middleware(HelloMiddleware::class);
Route::post('hello', 'HelloController@post');
Route::get('/home', 'HomeController@index')->name('home');



Route::get('develop', function() {
    return view('admin/bigQuestion');
});

Route::get('quiz', 'QuizController@index');

Route::get('quiz/{big_question_id}', 'QuizController@quiz');

// 大問
Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    // 大問一覧
    Route::get('/', 'AdminController@index');

    // 大問追加
    Route::get('/create_big_question', 'AdminController@create_big_question');
    // 大問保存
    Route::post('/create_big_question', 'AdminController@store_big_question_title');

    // 大問タイトル変更
    Route::get('/edit_title/{big_question_id}', 'AdminController@edit_title');
    // 大問タイトル変更確定
    Route::post('/edit_title/{big_question_id}', 'AdminController@store_edited_title');

    // 大問順序変更
    Route::get('/title/change_order', 'AdminController@change_title_order');
    // 大問順序変更確定
    Route::post('/title/change_order', 'AdminController@post_changed_title_order');

    // 大問削除確認
    Route::get('/delete_big_question/{big_question_id}', 'AdminController@delete_big_question');
    // 大問削除
    Route::get('/delete_title/{big_question_id}', 'AdminController@delete_title');
}
);

// 小問
Route::group(['prefix' => 'admin', 'as' => 'admin'], function (){
    // 小問一覧
    Route::get('/show/{$big_question_id}', 'AdminController@show_questions');
});

Auth::routes();

Route::get('/logout', function(){
    return Auth::logout();
});

