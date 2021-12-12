<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('course-industry/all', 'CourseIndustriesController@list');
Route::get('get-course-by-industry', 'CourseController@getCourseByIndustry');
Route::post('book-appointment', 'MailsController@appointment');
Route::post('apply-now', 'MailsController@applied');
Route::post('share-image', 'Admin\BlogsController@shareImg');
