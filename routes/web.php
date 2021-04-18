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
    ->where('page', 'contact|rpl|migration|blogs|ielts|tourist-visa|pte')
    ->name('page');
Route::get('admission/{page}', 'AdmissionsController')->name('admission');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
