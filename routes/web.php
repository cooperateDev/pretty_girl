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

	// // Category Management
 //    Route::get('/category', 'CategoryController@index');
 //    Route::post('/category_add', 'CategoryController@category_add');
 //    Route::get('/category_info/{id}', 'CategoryController@category_info');
 //    Route::get('/category_del/{id}', 'CategoryController@category_del');
	// Route::post('/category_edit/{id}', 'CategoryController@category_edit');

	// // Task Management
 //    Route::get('/task', 'TaskController@index');
 //    Route::post('/task_add', 'TaskController@task_add');
 //    Route::get('/task_info/{id}', 'TaskController@task_info');
 //    Route::get('/task_del/{id}', 'TaskController@task_del');
	// Route::post('/task_edit/{id}', 'TaskController@task_edit');

	// Slide Management
    Route::get('/slide', 'SlideController@index');
    Route::post('/slide_add', 'SlideController@slide_add');
    Route::get('/slide_del/{order}', 'SlideController@slide_del');

    // //Users
    // Route::get('users', 'UserController@index')->name('users');
    // Route::get('users/restore', 'UserController@restore')->name('users.restore');
    // Route::get('users/{id}/restore', 'UserController@restoreUser')->name('users.restore-user');
    // Route::get('users/{user}', 'UserController@show')->name('users.show');
    // Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    // Route::put('users/{user}', 'UserController@update')->name('users.update');
    // Route::any('users/{id}/destroy', 'UserController@destroy')->name('users.destroy');
    // Route::get('permissions', 'PermissionController@index')->name('permissions');
    // Route::get('permissions/{user}/repeat', 'PermissionController@repeat')->name('permissions.repeat');
    // Route::get('dashboard/log-chart', 'DashboardController@getLogChartData')->name('dashboard.log.chart');
    // Route::get('dashboard/registration-chart', 'DashboardController@getRegistrationChartData')->name('dashboard.registration.chart');


    // // Task MNG
    // Route::get('/taskmng', 'TaskMNGController@index');
    // Route::get('/taskmng_create', 'TaskMNGController@task_create');
    // Route::post('/taskmng_add', 'TaskMNGController@task_add');
    // Route::get('/taskmng_info/{id}', 'TaskMNGController@task_info');
    // Route::get('/taskmng_del/{id}', 'TaskMNGController@task_del');
    // Route::post('/taskmng_edit/{id}', 'TaskMNGController@task_edit');

    // // Daily Report
    // Route::get('/report', 'ReportController@index');
    // Route::get('/report_create', 'ReportController@report_create');
    // Route::post('/report_add', 'ReportController@report_add');
    // Route::get('/report_info/{id}', 'ReportController@report_info');
    // Route::get('/report_del/{id}', 'ReportController@report_del');
    // Route::post('/report_edit/{id}', 'ReportController@report_edit');
    // Route::post('/report/getByDate', 'ReportController@getByDate');

});

