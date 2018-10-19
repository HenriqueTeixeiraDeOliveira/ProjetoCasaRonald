<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a collection which
| contains the "web" middleware collection. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//------------------- LESSON CONTROLLER -------------------//
Route::get('/lesson', 'LessonController@index');
Route::get('/lesson/create', 'LessonController@create');
Route::post('/lesson', 'LessonController@store');
Route::get('/lesson/{lesson}', 'LessonController@show');
//Route::get('/lesson/{lesson)/edit', 'LessonController@edit');
//Route::patch('/lesson/{lesson)', 'LessonController@update');
//Route::delete('/lesson/{lesson)', 'LessonController@destroy');


//------------------- STICKER CONTROLLER -------------------//
Route::get('/sticker', 'StickerController@index');
Route::get('/sticker/create', 'StickerController@create');
Route::post('/sticker', 'StickerController@store');
Route::get('/sticker/{sticker}', 'StickerController@show');
//Route::get('/sticker/{sticker)/edit', 'StickerController@edit');
//Route::patch('/sticker/{sticker)', 'StickerController@update');
//Route::delete('/sticker/{sticker)', 'StickerController@destroy');

//------------------- USER NOTIFICATION CONTROLLER -------------------//
Route::get('/profile/notifications', 'UserNotificationController@index');


//------------------- LIKE CONTROLLER -------------------//
Route::post('lesson/{lesson}/likes', 'LikeController@store');
Route::delete('lesson/{lesson}/likes', 'LikeController@destroy');

//------------------- FAVORITE CONTROLLER -------------------//
Route::post('lesson/{lesson}/favorites', 'FavoriteController@store');
Route::delete('lesson/{lesson}/favorites', 'FavoriteController@destroy');

//------------------- COMPLETE CONTROLLER -------------------//
Route::post('lesson/{lesson}/completes', 'CompleteController@store');
Route::delete('lesson/{lesson}/completes', 'CompleteController@destroy');

/*
|   VERB            URI                     ACTION          ROUTE NAME
|   GET             /example                index           example.index
|   GET             /example/create         create          example.create
|   POST            /example                store           example.store
|   GET             /example/{key}          show            example.show
|   GET             /example/{key}/edit     edit            example.edit
|   PUT/PATCH       /example/{key}          update          example.update
|   DELETE          /example/{key}          destroy         example.destroy
*/

/***********************TEST ROUTES***********************/

Route::get('/test', function () {
    \Illuminate\Support\Facades\Auth::loginUsingId(1, true);
    return \App\Lesson::all();
});

