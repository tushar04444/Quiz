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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user-list', [App\Http\Controllers\BackendController::class, 'index'])->name('user_list');
Route::get('/user-del/{id}', [App\Http\Controllers\BackendController::class, 'user_del'])->name('user_del');
Route::get('/question', [App\Http\Controllers\BackendController::class, 'ques'])->name('ques');
Route::post('/question/store', [App\Http\Controllers\BackendController::class, 'ques_store'])->name('ques_store');
Route::get('/question/delete/{id}', [App\Http\Controllers\BackendController::class, 'ques_delete'])->name('ques.delete');

//category
Route::get('/category', [App\Http\Controllers\BackendController::class, 'category'])->name('category');
Route::post('/category/store', [App\Http\Controllers\BackendController::class, 'category_store'])->name('category.store');


//frontend
Route::get('/main', [App\Http\Controllers\FrontendController::class, 'index'])->name('main');

