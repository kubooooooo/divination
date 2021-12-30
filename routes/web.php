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
})->name('index');

Route::get('/sign', 'SignController@index')->name('sign.index');
Route::get('/sign/{sign}', 'SignController@show')->name('sign.show');

Route::get('/person', 'PersonController@index')->name('person.index');
Route::post('/person/show', 'PersonController@show')->name('person.show');
Route::get('/person/retake', 'PersonController@retake')->name('person.retake');
Route::get('/person/select', 'PersonController@select')->name('person.select');
Route::post('/person/retake', 'PersonController@selected')->name('person.selected');

Route::get('/tarot', 'TarotController@index')->name('tarot.index');
Route::get('/tarot/show', 'TarotController@show')->name('tarot.show');

Route::get('/best', 'BestController@index')->name('best.index');
Route::get('/best/sign', 'BestController@sign')->name('best.sign');
Route::get('/best/sign/{sign}', 'BestController@signshow')->name('best.sing.show');
Route::get('/best/person', 'BestController@person')->name('best.person');
Route::post('/best/person/show', 'BestController@personshow')->name('best.person.show');
Route::get('/best/tarot', 'BestController@tarot')->name('best.tarot');
Route::get('/best/tarot/show', 'BestController@tarotshow')->name('best.tarot.show');

Route::get('/inquiry', 'InquiryController@show')->name('inquiry');
Route::post('/inquiry/confirm', 'InquiryController@confirm');
Route::post('/inquiry/finish', 'InquiryController@finish');
