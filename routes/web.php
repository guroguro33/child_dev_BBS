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

Route::get('/', 'QuestionsController@index')->name('questions.index'); // ホーム画面
Route::get('/tag', 'QuestionsController@index')->name('questions.index'); // タグのホーム画面(vueルーターで遷移するが、ここで通しておかないと404エラーになる)
Route::get('/questions/{id}/show', 'QuestionsController@show')->name('questions.show'); //  質問詳細画面

Route::group(['middleware' => 'auth'], function() {
  Route::get('/questions/new', 'QuestionsController@create')->name('questions.create'); //  質問作成画面
  Route::post('/questions/new', 'QuestionsController@store')->name('questions.store'); //  質問登録
  Route::get('/questions/{id}/edit', 'QuestionsController@edit')->name('questions.edit');  //  質問編集画面
  Route::post('/questions/{id}/edit', 'QuestionsController@update')->name('questions.update');  //  質問編集
  Route::get('/questions/{id}/del', 'QuestionsController@delete')->name('questions.delete');  //  質問削除
  Route::get('/mypage', 'QuestionsController@mypage')->name('questions.mypage'); // マイページ
  Route::post('/question/{id}/show', 'AnswersController@store')->name('answers.store'); // 回答登録
  Route::get('/question/{id}/del', 'AnswersController@delete')->name('answers.delete'); // 回答削除
});


Auth::routes();

Route::get('/home', function(){
  return redirect('/');
});
