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
