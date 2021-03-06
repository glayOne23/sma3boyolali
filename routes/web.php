<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MainController@index');

//galeri
Route::get('/galeri', 'AlbumController@index');
Route::get('/galeri/{album}', 'AlbumController@show');

//berita
Route::get('/berita', 'BlogController@index');
Route::get('/berita/{blog}', 'BlogController@show');

//sejarah
Route::get('/sejarah', 'HistoryController@show');

//prestasi
Route::get('/prestasi', 'AchievementController@index');
Route::get('/prestasi/{achievement}', 'AchievementController@show');

//ekstrakurikuler
Route::get('/ekstrakurikuler/{ekstrakurikuler}', 'ExtracurricularController@show');

//visi-misi
Route::get('/visi-misi', 'VisionController@show');

//guru
Route::get('/guru', 'TeacherController@show');

//alumni
Route::get('/alumni', 'AlumniController@show');

//link terkait
Route::get('/link', 'LinkController@show');

//admin
Route::group(['middleware' =>'admin'], function(){
    //users
    Route::resource('/admin/users','AdminUserController');
    
    //main
    Route::get('/admin', 'AdminMainController@index');

    //sejarah
    Route::get('/admin/history', 'AdminHistoryController@index');
    Route::put('/admin/history', 'AdminHistoryController@update');
    Route::delete('/admin/history/images/{history_image}', 'AdminHistoryController@destroy');
    
    //super_admin
    Route::resource('/admin/homes','AdminHomeController');
    
    //slideshows routes
    Route::get('/admin/slideshows/create','AdminSlideshowController@create');
    Route::post('/admin/slideshows','AdminSlideshowController@store');
    Route::delete('/admin/slideshows/delete','AdminSlideshowController@destroy');
    
    
    //headmaster routes
    Route::put('/admin/headmaster','AdminHeadmasterController@update');
    
    //vision
    Route::get('admin/visions', 'AdminVisionController@index');
    Route::put('admin/visions', 'AdminVisionController@update');
    
    //album
    Route::resource('/admin/albums','AdminAlbumController');
    //album_images
    // Route::get('admin/albums/{album}/images', 'AdminAlbumImageController@index');
    Route::get('admin/albums/{album}/images/create', 'AdminAlbumImageController@create');
    Route::post('admin/albums/{album}/images', 'AdminAlbumImageController@store');
    Route::delete('/admin/albums/{album}/images/delete','AdminAlbumImageController@destroy');
    
    //employees
    Route::resource('/admin/employees','AdminEmployeeController');
    Route::delete('/admin/employees', ['as'=>'employees.destroy', 'uses'=>'AdminEmployeeController@destroy']);
    //employee_categories
    Route::resource('/admin/employee_categories','AdminEmployeeCategoryController');

    //extracurriculars
    Route::resource('/admin/extracurriculars','AdminExtracurricularController');
    //extracurricular_images
    Route::delete('admin/extracurriculars/{extracurricular}/images/{extracurricular_image}', 'AdminExtracurricularImageController@destroy')->name('extracurricular_image');

    //Blog
    Route::resource('/admin/blogs','AdminBlogController');
    //Achievement
    Route::resource('/admin/achievements','AdminAchievementController');

    //relatedlink
    Route::resource('/admin/related_links','AdminRelatedLinkController');
    
    //interface for slideshow and headmaster
    Route::get('/home', 'HomeController@index')->name('home');

    //upload data from articles
    // Route::post('/upload', 'AdminUploadArticleContentController@store');
});


Auth::routes();

