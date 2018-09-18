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


Route::get('/lesson', 'LessonController@index');
Route::get('/lesson/create', 'LessonController@create');
Route::post('/lesson', 'LessonController@store');
Route::get('/lesson/{lesson}', 'LessonController@show');
//Route::get('/lesson/{lesson)/edit', 'LessonController@edit');
//Route::patch('/lesson/{lesson)', 'LessonController@update');
//Route::delete('/lesson/{lesson)', 'LessonController@destroy');



Route::get('/sticker', 'StickerController@index');
Route::get('/sticker/create', 'StickerController@create');
Route::post('/sticker', 'StickerController@store');
Route::get('/sticker/{sticker}', 'StickerController@show');
//Route::get('/sticker/{sticker)/edit', 'StickerController@edit');
//Route::patch('/sticker/{sticker)', 'StickerController@update');
//Route::delete('/sticker/{sticker)', 'StickerController@destroy');


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
