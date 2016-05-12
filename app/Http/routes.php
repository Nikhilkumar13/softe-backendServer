<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('hi', function () {
    return "Hi";
});

Route::get('isvaliduser',  'UserController@isValid');
Route::get('getuserdata', 'UserController@getUserData');
Route::get('/getUserApplication','UserController@getUserApplication');

Route::get('/getcompanylist','CompanyController@getCompanyList');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => ['web']], function () {
//     //
// });

// Route::group(['middleware' => 'web'], function () {
// 	Route::get('/', function () {
//     return view('welcome');
// });
//     Route::auth();

//     Route::get('/home', 'HomeController@index');
// });
