<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::resource('items', 'ItemController');
Route::post('items', 'ItemController@search');

Route::resource('bsit','BsitController');

Route::resource('record','RecordController');
Route::get('list_record','RecordController@index')->name('list.record');
Route::get('list_record/show','RecordController@show');
Route::post('search','RecordController@search');

Route::get('template','TemplateController@index')->name('template.index');
Route::get('template/mla','TemplateController@mla')->name('template.mla');
Route::get('template/paperpiletool','TemplateController@tool1')->name('template.tool1');


Route::get('file','FileController@index')->name('upload.file');
Route::post('file','FileController@store');

Route::get('admin','UploadController@index');
Route::post('file/search','UploadController@search');

Route::get('login','LoginController@index');

Route::get('loading','LoadingController@index');
Route::get('show','LoadingController@show');

Route::resource('logins','AccountController');

//Route::get('frontend.home', 'FrontendController_Home@index')

//FRONTEND
//Route::any('', 'FrontendController_Home@index');
//BACKTEND
//Route::any('/admin', 'BackendController_Home@index');
