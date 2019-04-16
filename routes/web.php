<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminMainController@index');

Route::resource('/admin/homes','AdminHomeController');

//slideshows routes
// Route::resource('/admin/slideshows','AdminSlideshowController');
Route::get('/admin/slideshows/create','AdminSlideshowController@create');
Route::post('/admin/slideshows','AdminSlideshowController@store');
Route::delete('/admin/slideshows/delete','AdminSlideshowController@destroy');

//headmaster routes
Route::put('/admin/headmaster','AdminHeadmasterController@update');


