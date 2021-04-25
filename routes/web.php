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


Route::get('/', 'PagesController@index')->name('index');
Route::get('{page}', 'PagesController')
    ->where('page', 'contact|rpl|migration|ielts|tourist-visa|pte|about-itec')
    ->name('page');
Route::get('admission/{page}', 'AdmissionsController')
    ->where('page', 'australia|canada|europe|malaysia')
    ->name('admission');
Route::get('{slug}/courses', 'CourseController@index')->name('courses');

Route::get('blogs', 'PagesController@blogs')->name('blogs');
Route::get('blog/{slug}', 'PagesController@blogDetail')->name('blog.detail');


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', 'Admin\AdminController@index')->name('dashboard');

    Route::prefix('blogs')->group(function () {
        Route::get('categories', 'Admin\BlogCategoriesController@index')->name('blog.category');
        Route::get('add-new', 'Admin\BlogsController@create')->name('blogs.add');
        Route::post('add-category', 'Admin\BlogCategoriesController@create')->name('blog.category.add');
        Route::post('add-blog', 'Admin\BlogsController@store')->name('blog.add');
    });


    Route::prefix('course')->group(function () {
        Route::get('/', 'Admin\CoursesController@index')->name('course');
        Route::get('add-new', 'Admin\CoursesController@create')->name('course.add');
        Route::post('add-new', 'Admin\CoursesController@store');

        Route::post('add-category', 'Admin\CoursesController@createCategory')->name('category.add');
        Route::post('add-industry', 'Admin\CoursesController@createIndustry')->name('industry.add');
    });
});

require __DIR__ . '/auth.php';
