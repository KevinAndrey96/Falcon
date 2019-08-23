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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('/questions/index', 'QuestionsController@index')->name('questions');
Route::get('/questions/crear', 'QuestionsController@crear')->name('questions/crear');
Route::post('/questions', 'QuestionsController@store');*/
Route::resource('/questions', 'QuestionsController');
/*Route::patch('/questions/crear',[
    'as' => 'questions.store',
    'uses' => 'QuestionsController@store'
]);*/
/*Route::get('/questions/crear',[
    'as' => 'questions.store',
    'uses' => 'QuestionsController@crear'
]);*/