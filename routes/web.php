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

Route::get('/', [\App\Http\Controllers\AuthController::class, 'authForm'])->name('login');
Route::get('authPossess', [\App\Http\Controllers\AuthController::class, 'auth'])->name('auth');
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('users', [\App\Http\Controllers\CRUDControllers\UserController::class, 'index'])->name('users.index');
    Route::resource('users', \App\Http\Controllers\CRUDControllers\UserController::class)->except('index');
    Route::resource('posts', \App\Http\Controllers\CRUDControllers\PostController::class);
    Route::resource('oss', \App\Http\Controllers\CRUDControllers\OsController::class);
    Route::resource('statuses', \App\Http\Controllers\CRUDControllers\StatusController::class);
    Route::resource('departments', \App\Http\Controllers\CRUDControllers\DepartmentController::class);

    Route::get('search', [\App\Http\Controllers\SearchController::class, 'search'])->name('search');
    Route::get('find', [\App\Http\Controllers\SearchController::class, 'find'])->name('find');
    Route::get('getUsersByDep/{departmentId}', [\App\Http\Controllers\SearchController::class, 'getUsersByDep'])->name('getUsersByDep');
});


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
