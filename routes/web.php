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
    ->where('page', 'contact|rpl|migration|blogs|ielts|tourist-visa|pte|about-itec')
    ->name('page');
Route::get('admission/{page}', 'AdmissionsController')
    ->where('page', 'australia|canada|europe|malaysia')
    ->name('admission');
Route::get('{slug}/courses', 'CourseController@index')->name('courses');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'Admin\AdminController@index')->name('dashboard');
});

require __DIR__ . '/auth.php';
