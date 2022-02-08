<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

// new routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::view('/','admin.index')->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});



Route::get('/newslist', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [NewsController::class,'show'])
    ->where('news', '\d+')
    ->name('news.show');

Route::get('/collection', function () {
    $array = ['Anna', 'VIctor', 'Alexey', 'Dima', 'Irina', 'Vasya', 'Olya'];
    $collection = collect();

});

