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

Route::get("/", "MainController@index")->name('Home');
Route::get("/content/{id}/", "MainController@content")->name('Content');
Route::get("/list/", "MainController@contentList")->name('List');
Route::get("/injection-methods/", "MainController@injMethods")->name("InjMethods");
Route::get("/prints/", "MainController@prints")->name("Prints");


Route::get("/images/{filename}", "StorageController@images")->name("Images");
