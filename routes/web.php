<?php
//for users
Route::view('/', 'welcome');
Auth::routes();
Route::view('/home', 'users.home')->middleware('auth');

//for admin
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin.admin');
});

