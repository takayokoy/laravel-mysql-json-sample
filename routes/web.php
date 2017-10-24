<?php

Route::get('/tests/search', 'TestController@search')->name('tests.search');
Route::resource('tests', 'TestController');
