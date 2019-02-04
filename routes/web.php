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
// Named routes allow the convenient generation of URLs or redirects for specific routes.
//You may specify a name for a route by chaining the name method onto the route definition:
//Example:Route::get('user/profile', 'UserController@showProfile')->name('profile');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\AdminLoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
    
    
});
// Route::get('/admin/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
// Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.submit');
// Route::get('/admin', 'AdminLoginController@index')->name('admin')->name('admin.dashboard');
