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

Route::get('/test', function () {
		echo 'Hello World';
	});

Route::get('/goodbye', function () {
		echo 'Goodbye!!!';
	});

Route::get('/abc', function () {
		return 'Hello ABC!!!';
	});

Route::get('/login', function () {
		return view('dang-nhap');
	});

Route::get('/danh-sach-sv', function () {
		return view('list');
	});

Route::get('/danh-sach', [
		'as'   => 'danh-sach-sinh-vien',
		'uses' => 'ListController@showList'
	]);

Route::get('/{year}/{month}/{day}/{message}', function ($year, $month, $day, $message) {
		return $message.'-'.$day.'/'.$month.'/'.$year;
	});