<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', 'AdminController@index')->name('dashboard');

Route::prefix('blogs')->name('blog.')->group(function () {
    Route::get('/', 'BlogsController@index');
    Route::get('list', 'BlogsController@getPaginatedList');
    Route::get('{blog}/raw', 'BlogsController@rawItem');
    Route::get('categories', 'BlogCategoriesController@index')->name('blog.category');
    Route::get('create', 'BlogsController@create')->name('create');
    Route::post('create', 'BlogsController@store')->name('store');
    Route::post('add-category', 'BlogCategoriesController@create')->name('blog.category.add');
    Route::post('add-blog', 'BlogsController@store')->name('blog.add');
    Route::get('edit/{blog}', 'BlogsController@edit')->name('blog.edit');
    Route::put('update/{blog}', 'BlogsController@update')->name('blog.update');
    Route::get('remove/{blog}', 'BlogsController@destroy')->name('blog.remove');
    Route::post("media-upload", 'BlogsController@bodyImages');
});

Route::prefix('categories')->name('category.')->group(function () {
    Route::get('raw', 'BlogCategoriesController@rawList');
});

Route::prefix('course')->group(function () {
    Route::get('/all', 'CoursesController@index')->name('course');
    Route::post('add-new', 'CoursesController@store');

    Route::name('course.')->group(function () {
        Route::get('add-new', 'CoursesController@create')->name('add');
        Route::get('{id}', 'CoursesController@edit')->name('edit');
        Route::put('/update/{id}', 'CoursesController@update')->name('update');
    });

    Route::post('add-category', 'CoursesController@createCategory')->name('category.add');
    Route::post('add-industry', 'CoursesController@createIndustry')->name('industry.add');
});

Route::prefix('settings')->group(function () {
    Route::view('profile', 'admin.settings.profile')->name('profile');
    Route::post('profile', 'UsersController@updateProfile');
    Route::post('change-password', 'UsersController@changePassword');
});
