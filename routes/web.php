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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend
Route::get('/', 'Frontend\HomeController@index');

// Blog
Route::get('/blog', 'Frontend\BlogController@index');
Route::get('/blog/detail/{id}', 'Frontend\BlogController@detail');
Route::get('/blog/create_page', 'Frontend\BlogController@create_page');
Route::post('/blog/create', 'Frontend\BlogController@create');
Route::get('/blog/edit_page/{id}', 'Frontend\BlogController@edit_page');
Route::post('/blog/update', 'Frontend\BlogController@update');

// Comment
Route::post('/comment/create', 'Frontend\CommentController@create');
Route::post('/comment/reply', 'Frontend\CommentController@reply');

// Webshop
Route::get('/webshop', 'Frontend\WebshopController@index');

// Data portal
Route::get('/dataportal', 'Frontend\DataportalController@index');

// Frontend Auth
Route::get('/login', 'Frontend\LoginController@index')->name('frontendlogin');
Route::post('/login', 'Frontend\LoginController@login');
Route::get('/logout', 'Frontend\LoginController@logout');
Route::get('/signup', 'Frontend\RegisterController@index')->name('frontendsignup');
Route::post('/signup', 'Frontend\RegisterController@create');

//Auth
Route::get('admin/login', 'Auth\LoginController@index')->name('login')	;
Route::post('admin/login', 'Auth\LoginController@login');
Route::get('admin/logout', 'Auth\LoginController@logout');
Route::get('admin/signup', 'Auth\RegisterController@index')->name('signup');
Route::post('admin/signup', 'Auth\RegisterController@create');

/**
 * Backend routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    
    // Dashboard
    Route::get('/', 'DashboardController@index');
    Route::post('/filter', 'DashboardController@index');

    // Member Management
    Route::get('/member', 'MemberController@index');
    Route::post('/member_add', 'MemberController@member_add');
    Route::get('/member_info/{id}', 'MemberController@member_info');
    Route::get('/member_del/{id}', 'MemberController@member_del');
	Route::post('/member_edit/{id}', 'MemberController@member_edit');

});