<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontController@index');

Route::prefix('shopping_cart')->group(function () {
    Route::get('step01','FrontController@step01');
    Route::get('step02','FrontController@step02');
    Route::get('step03','FrontController@step03');
    Route::get('step04','FrontController@step04');

    Route::post('add', 'FrontController@add');
    Route::post('update', 'FrontController@update');
    Route::get('content', 'FrontController@content');
    Route::get('clear', 'FrontController@clear');

});

Route::prefix('contact_us')->group(function () {
    Route::get('/','FrontController@contactUs');
    Route::post('/store','ContactUsController@store');
});

Route::get('product','FrontController@product');


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('contact_us')->group(function () {
        Route::get('/','ContactUsController@index');
        Route::get('/edit/{id}','ContactUsController@edit');
        Route::delete('delete/{id}','ContactUsController@delete');
    });

    Route::prefix('news')->group(function () {
        Route::get('/', 'NewsController@index');
        Route::get('/create', 'NewsController@create');
        Route::post('/store', 'NewsController@store');
        Route::get('/edit/{id}', 'NewsController@edit');
        Route::post('/update/{id}', 'NewsController@update');
    });

    Route::prefix('product')->group(function () {
        // 產品管理
        Route::prefix('/type')->group(function () {
            // 產品種類管理
            Route::get('/', 'ProductTypeController@index');
            Route::get('/create', 'ProductTypeController@create');
            Route::post('/store', 'ProductTypeController@store');
            Route::get('/edit/{id}', 'ProductTypeController@edit');
            Route::post('/update/{id}', 'ProductTypeController@update');
            Route::delete('/delete/{id}', 'ProductTypeController@delete');
        });

        Route::prefix('/item')->group(function () {
            // 產品品項管理
            Route::get('/', 'ProductController@index');
            Route::get('/create', 'ProductController@create');
            Route::post('/store', 'ProductController@store');
            Route::get('/edit/{id}', 'ProductController@edit');
            Route::post('/update/{id}', 'ProductController@update');
            Route::delete('/delete/{id}', 'ProductController@delete');
            Route::post('/deleteImage', 'ProductController@deleteImage');
        });
    });
    
    Route::prefix('user')->group(function ()
    {
        Route::get('/', 'UserController@index');
        Route::get('/create', 'UserController@create');
        Route::post('/store', 'UserController@store');
        Route::get('/edit/{id}', 'UserController@edit');
        Route::post('/update/{id}', 'UserController@update');
        Route::delete('/delete/{id}', 'UserController@delete');
    });
});

Auth::routes();
// // Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');