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
})->name('landing_page');


/*navigation*/
Route::get('features','navigationController@features')->name('features');
Route::get('about','navigationController@about')->name('about');
/*end navigation */

Route::get('login','LoginController@index');
Route::get('logout','LoginController@logout')->name('logout');
Route::post('login','LoginController@login')->name('postLogin');

  Route::get('list_record','RecordController@index')->name('list.record');
  Route::get('list_record/show','RecordController@show');
  Route::get('search','RecordController@search');
  Route::resource('record','RecordController');

    Route::get('template','TemplateController@index')->name('template.index');
    Route::get('template/mla','TemplateController@mla')->name('template.mla');
    Route::get('template/paperpiletool','TemplateController@tool1')->name('template.tool1');

/*admin Panel*/
Route::group(['middleware' => ['auth']], function() {
  Route::resource('items', 'ItemController');
  Route::post('items', 'ItemController@search');

  Route::resource('bsit','BsitController');

  Route::get('record/{id}/file','FileController@index')->name('upload.file');
  Route::post('record/{id}/file','FileController@store')->name('upload.file');



  Route::post('file','FileController@store');

  Route::get('admin','UploadController@index');
  Route::get('file/search','UploadController@search');


  Route::get('loading','LoadingController@index');
  Route::get('show','LoadingController@show');
  Route::get('home','HomeCOntroller@index')->name('home');
  Route::resource('logins','AccountController');
});

//Route::get('frontend.home', 'FrontendController_Home@index')

//FRONTEND
//Route::any('', 'FrontendController_Home@index');
//BACKTEND
//Route::any('/admin', 'BackendController_Home@index');
