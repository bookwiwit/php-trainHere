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

Route::get('/','homeCon@index');


Route::get('firebase','FirebaseController@querySnapshot');
// Route::get('register',function(){
// 	return View::make('register');
// });
Route::get('register','RegisterCon@index');
Route::post('register','RegisterCon@store');
Route::get('cancel', 'cancelCon@index');

Route::get('login','loginCon@index');
Route::post('login', 'loginCon@store');
// Route::get('login', 'loginCon@cancel');

Route::get('menu', 'menuCon@index');

Route::get('fitplan', 'fitplanCon@index');

Route::get('addfitplan', 'addfitplanCon@index');
Route::post('addfitplan', 'addfitplanCon@store');

Route::get('addfitplan2', 'addfitplanCon@index');
Route::post('addfitplan2', 'addfitplanCon@store');

Route::get('foodnutrition', 'foodnutritionCon@index');

Route::get('addfoodnutrition', 'addfoodnutritionCon@index');
Route::post('addfoodnutrition', 'addfoodnutritionCon@store');

Route::get('video', 'videoCon@index');

Route::get('addvideo', 'addvideoCon@index');
Route::post('addvideo', 'addvideoCon@store');

Route::get('editvideo', 'editvideoCon@index');
Route::post('editvideo', 'editvideoCon@store');

Route::get('question', 'questionCon@index');

Route::get('addquestion', 'addquestionCon@index');
Route::post('addquestion', 'addquestionCon@store');

Route::get('editquestion', 'editquestionCon@index');
Route::post('editquestion', 'editquestionCon@store');

Route::get('editfoodnutrition', 'editfoodnutritionCon@index');
Route::post('editfoodnutrition', 'editfoodnutritionCon@store');

Route::get('user', 'userCon@index');

Route::get('adduser', 'adduserCon@index');
Route::post('adduser', 'adduserCon@store');

Route::get('edituser', 'edituserCon@index');
Route::post('edituser', 'edituserCon@store');

Route::get('collection', 'collectionCon@index');
// Route::get('delete', 'controller@function');






