<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
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
Route::get('/',[BooksController::class, "home"]);
Route::get('index',[BooksController::class, "index"]);
Route::get('back',[BooksController::class, "back"]);
Route::get('create',[BooksController::class, "create"]);
Route::post('insert',[BooksController::class, "insert"]);
Route::get('view',[BooksController::class, "view"]);
Route::get('destroy/{id}',[BooksController::class, "destroy"]);
Route::get('edit/{id}',[BooksController::class, "edit"]);
Route::post('update/{id}',[BooksController::class, "update"]);
Route::get('read/{id}',[BooksController::class, "read"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
