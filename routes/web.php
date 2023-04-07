<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'lessons'], function (){
    Route::get('/',\App\Http\Controllers\Lesson\IndexController::class)->name('lesson.index');
    Route::get('/create',\App\Http\Controllers\Lesson\CreateController::class)->name('lesson.create');
    Route::post('/',\App\Http\Controllers\Lesson\StoreController::class)->name('lesson.store');
    Route::get('/{lesson}/edit',\App\Http\Controllers\Lesson\EditController::class)->name('lesson.edit');
    Route::get('/{lesson}',\App\Http\Controllers\Lesson\ShowController::class)->name('lesson.show');
    Route::patch('/{lesson}',\App\Http\Controllers\Lesson\UpdateController::class)->name('lesson.update');
    Route::delete('/{lesson}',\App\Http\Controllers\Lesson\DeleteController::class)->name('lesson.delete');
});

Route::group(['prefix' => 'classroom'], function (){
    Route::get('/',\App\Http\Controllers\Classroom\IndexController::class)->name('classroom.index');
    Route::get('/create',\App\Http\Controllers\Classroom\CreateController::class)->name('classroom.create');
    Route::post('/',\App\Http\Controllers\Classroom\StoreController::class)->name('classroom.store');
    Route::get('/{classroom}/edit',\App\Http\Controllers\Classroom\EditController::class)->name('classroom.edit');
    Route::get('/{classroom}',\App\Http\Controllers\Classroom\ShowController::class)->name('classroom.show');
    Route::patch('/{classroom}',\App\Http\Controllers\Classroom\UpdateController::class)->name('classroom.update');
    Route::delete('/{classroom}',\App\Http\Controllers\Classroom\DeleteController::class)->name('classroom.delete');
});

Route::group(['prefix' => 'user'], function (){
    Route::get('/',\App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create',\App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/',\App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{user}/edit',\App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::get('/{user}',\App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::patch('/{user}',\App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}',\App\Http\Controllers\User\DeleteController::class)->name('user.delete');
});

Route::group(['prefix' => 'group'], function (){
    Route::get('/',\App\Http\Controllers\Group\IndexController::class)->name('group.index');
    Route::get('/create',\App\Http\Controllers\Group\CreateController::class)->name('group.create');
    Route::post('/',\App\Http\Controllers\Group\StoreController::class)->name('group.store');
    Route::get('/{group}/edit',\App\Http\Controllers\Group\EditController::class)->name('group.edit');
    Route::get('/{group}',\App\Http\Controllers\Group\ShowController::class)->name('group.show');
    Route::patch('/{group}',\App\Http\Controllers\Group\UpdateController::class)->name('group.update');
    Route::delete('/{group}',\App\Http\Controllers\Group\DeleteController::class)->name('group.delete');
});
