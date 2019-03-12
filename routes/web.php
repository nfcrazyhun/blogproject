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

Auth::routes();


// All my routes that needs a logged in user
Route::group(['middleware' => ['auth']], function() {

    //admin only pages
    Route::group(['middleware' => ['admin']], function() {
        Route::resource('admin/users','AdminUsersController');
    });


    //users-admin landing pages
    Route::get('/admin', function () {
        return view('layouts/adminIndex');
    });


    //users-admin posts pages
    Route::resource('admin/posts','AdminPostsController');

    //users-admin category pages
    Route::resource('admin/categories','AdminCategoriesController');


});

//for without login
Route::group(array('before' =>'auth'), function()
{
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/blog/{id}', 'HomeController@showBlogDetail');
    Route::get('/register', 'HomeController@redirToLogin');
});

