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

Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('posts', \App\Http\Controllers\PostController::class);
Route::resource('oss', \App\Http\Controllers\OsController::class);
Route::resource('statuses', \App\Http\Controllers\StatusController::class);
Route::resource('departments', \App\Http\Controllers\DepartmentController::class);

Route::get('search', [\App\Http\Controllers\additional\Tests::class, 'search'])->name('search');
Route::get('find', [\App\Http\Controllers\additional\Tests::class, 'find'])->name('find');
Route::get('getUsersByDep/{departmentId}', [\App\Http\Controllers\additional\Tests::class, 'getUsersByDep'])->name('getUsersByDep');

//Verb  URL                   Action        ROUTE NAME
//==========================================================
//GET	 /photos	          index	        photos.index
//GET	 /photos/create	      create	    photos.create
//POST	 /photos	          store	        photos.store
//GET	 /photos/{photo}   	  show	        photos.show
//GET	 /photos/{photo}/edit edit	        photos.edit
//PATCH	 /photos/{photo}	  update	    photos.update
//DELETE /photos/{photo}	  destroy	    photos.destroy

Route::get('getCsrf', [\App\Http\Controllers\additional\Tests::class, 'getCsrf']);
