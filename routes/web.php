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

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home.index');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('/instruct', [App\Http\Controllers\HomeController::class, 'instruction'])->name('home.instruct');
Route::get('/hackerboard', [App\Http\Controllers\HomeController::class, 'hackerboard'])->name('home.hackerboard');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['role:teacher']], function () {    // Xác minh đăng nhập và quyền truy cập
    Route::prefix('quanly')->group(function () {
        Route::get('/', [
            'as' => 'user.home',
            'uses' => 'AdminController@home',
        ]);
        Route::prefix('roles')->group(function () {
            Route::get('/', [
                'as' => 'ql_roles.index',
                'uses' => 'RoleController@index',
                'middleware' => 'can:role-list'
            ]);
            Route::get('/create', [
                'as' => 'ql_roles.create',
                'uses' => 'RoleController@create',
                'middleware' => 'can:role-add'
            ]);
            Route::post('/create', [
                'as' => 'ql_roles.store',
                'uses' => 'RoleController@store',
                'middleware' => 'can:role-add'
            ]);

            Route::get('/edit/{id}', [
                'as' => 'ql_roles.edit',
                'uses' => 'RoleController@edit',
                'middleware' => 'can:role-edit'
            ]);
            Route::post('/edit/{id}', [
                'uses' => 'RoleController@update',
                'middleware' => 'can:role-edit'
            ]);
            Route::get('/delete/{id}', [
                'as' => 'ql_roles.delete',
                'uses' => 'RoleController@delete',
                'middleware' => 'can:role-delete'
            ]);
        });
         // module user
         Route::prefix('users')->group(function () {
            Route::get('/', [
                'as' => 'ql_users.index',
                'uses' => 'AdminController@index',
                'middleware' => 'can:user-list'
            ]);
            Route::get('/create',[
                'as'=>'ql_users.create',
                'uses'=>'AdminController@create',
                'middleware' => 'can:user-add'
            ]);
            Route::post('/create',[
                'as'=>'ql_users.store',
                'uses'=>'AdminController@store',
                'middleware' => 'can:user-add'
            ]);
            //edituser
            Route::get('/edit/{id}', [
                'as'=>'ql_users.edit',
                'uses'=>'AdminController@edit',
                'middleware' => 'can:user-edit'
            ]);
            Route::post('/edit/{id}', [
                'uses'=>'AdminController@update',
                'middleware' => 'can:user-edit'
            ]);

            //userdelete
            Route::get('/delete/{id}',[
                'as'=>'ql_users.delete',
                'uses'=>'AdminController@delete',
                'middleware' => 'can:user-delete'
            ]);
        });

     
         //module baiviet
         Route::prefix('baiviet')->group(function () {
            Route::get('/', [
                'as' => 'ql_baiviet.index',
                'uses' => 'PostController@index',
                'middleware' => 'can:baiviet-list'
            ]);
            Route::get('/create', [
                'as' => 'ql_baiviet.create',
                'uses' => 'PostController@create',
                'middleware' => 'can:baiviet-add'
            ]);
            Route::post('/create', [
                'as' => 'ql_baiviet.store',
                'uses' => 'PostController@store',
                'middleware' => 'can:baiviet-add'
            ]);

            Route::get('/show/{id}', [
                'as' => 'ql_baiviet.show',
                'uses' => 'PostController@show',
                'middleware' => 'can:baiviet-list'
            ]);



            Route::get('/edit/{id}', [
                'as' => 'ql_baiviet.edit',
                'uses' => 'PostController@edit',
                'middleware' => 'can:baiviet-edit'
            ]);
            Route::post('/edit/{id}', [
                'uses' => 'PostController@update',
                'middleware' => 'can:baiviet-edit'
            ]);
            Route::get('/delete/{id}', [
                'as' => 'ql_baiviet.delete',
                'uses' => 'PostController@delete',
                'middleware' => 'can:baiviet-delete'
            ]);
        });
    });
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => 'auth'], function () {
    Route::prefix('nopbai')->group(function () {
        Route::get('/{id}', [
            'as' => 'submit.postIndex',
            'uses' => 'SubmitController@index',
        ]);
        Route::post('/{id}', [
            'as' => 'submit.postIndex',
            'uses' => 'SubmitController@post',
        ]);
    });
    Route::prefix('answer')->group(function () {
        Route::get('/{id}', [
            'as' => 'submit.postIndex',
            'uses' => 'SubmitController@ans',
        ]);
        Route::post('/{id}', [
            'as' => 'submit.postIndex',
            'uses' => 'SubmitController@postans',
        ]);
    });
});
