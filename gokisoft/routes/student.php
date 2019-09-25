<?php

Route::group(['prefix' => '/student'], function () {
		Route::get('/view', 'StudentController@viewAdd')->name('viewAdd');

		Route::post('/post', 'StudentController@addStudent')->name('postStudent');

		Route::get('/list', 'StudentController@showAll')->name('showAll');
	});