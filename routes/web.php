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
    ->where('page', 'contact|migration|ielts|tourist-visa|pte|about-itec|faq')
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

Route::view('join-as-rto-partner', 'pages.rto');
Route::view('faq', 'pages.faq')->name('faqs');

/**
 * Mails
 */
Route::view('check-your-rpl-eligibility', 'pages.check-rpl-eligibility')->name('check-rpl-eligibility');
Route::post('check-your-rpl-eligibility', 'MailsController@rplRequest');
Route::post('subscribe', 'MailsController@subscribe');


Route::get('{File}/Download', 'PagesController@downloadFile')->name('file.download');
Route::get('testMail', 'MailsController@testMail');

require __DIR__ . '/auth.php';
