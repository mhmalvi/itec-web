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

Route::view('test', 'mails.rpl');


Route::get('/', 'PagesController@index')->name('index');
Route::get('{page}', 'PagesController')
    ->where('page', 'contact|migration|ielts|tourist-visa|pte|about-itec')
    ->name('page');
Route::get('admission/{page}', 'AdmissionsController')
    ->where('page', 'australia|canada|europe|malaysia')
    ->name('admission');


Route::get('{slug}/courses', 'CourseController@index')->name('courses');

Route::get('blogs', 'PagesController@blogs')->name('blogs');
Route::get('blog/{slug}', 'PagesController@blogDetail')->name('blog.detail');

Route::get('rpl', 'PagesController@rpl')->name('rpl');
Route::get('{slug}/industry', 'PagesController@industry')->name('industry');
Route::get('{Slug}/course', 'PagesController@course')->name('course.single');

Route::prefix('training')->group(function () {
    Route::get('/', 'PagesController@training')->name('trainings');
    Route::name('trainings.')->group(function () {
        Route::get('full-qualifications', 'PagesController@fullQualifications')->name('full');
        Route::get('short-courses', 'PagesController@shortCourses')->name('short');
    });
});

Route::get('{File}/Download', 'PagesController@downloadFile')->name('file.download');

/**
 * Forms
 * Response send to mail
 * admission@itecounsel.com
 */
Route::post('book-appointment', 'MailsController@appointment')->name('book.appointment');
Route::post('check-eligibility', 'EligibilityController@action')->name('check.eligibility');


Route::get('testMail', 'MailsController@testMail');


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', 'Admin\AdminController@index')->name('dashboard');

    Route::prefix('blogs')->group(function () {
        Route::get('/', 'Admin\BlogsController@index')->name('blogs');
        Route::get('categories', 'Admin\BlogCategoriesController@index')->name('blog.category');
        Route::get('add-new', 'Admin\BlogsController@create')->name('blogs.add');
        Route::post('add-category', 'Admin\BlogCategoriesController@create')->name('blog.category.add');
        Route::post('add-blog', 'Admin\BlogsController@store')->name('blog.add');
        Route::get('edit/{slug}', 'Admin\BlogsController@edit')->name('blog.edit');
        Route::put('updated/{id}', 'Admin\BlogsController@update')->name('blog.update');
        Route::get('remove/{slug}', 'Admin\BlogsController@destroy')->name('blog.remove');
    });


    Route::prefix('course')->group(function () {
        Route::get('/all', 'Admin\CoursesController@index')->name('course');
        Route::post('add-new', 'Admin\CoursesController@store');

        Route::name('course.')->group(function () {
            Route::get('add-new', 'Admin\CoursesController@create')->name('add');
            Route::get('{id}', 'Admin\CoursesController@edit')->name('edit');
            Route::put('/update/{id}', 'Admin\CoursesController@update')->name('update');
        });

        Route::post('add-category', 'Admin\CoursesController@createCategory')->name('category.add');
        Route::post('add-industry', 'Admin\CoursesController@createIndustry')->name('industry.add');
    });
});

require __DIR__ . '/auth.php';
