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

Route::group(['prefix' => 'timetable'], function (){
    Route::get('/',\App\Http\Controllers\Timetable\IndexController::class)->name('timetable.index');
    Route::get('/create',\App\Http\Controllers\Timetable\CreateController::class)->name('timetable.create');
    Route::post('/',\App\Http\Controllers\Timetable\StoreController::class)->name('timetable.store');
    Route::get('/{timetable}/edit',\App\Http\Controllers\Timetable\EditController::class)->name('timetable.edit');
    Route::get('/{timetable}',\App\Http\Controllers\Timetable\ShowController::class)->name('timetable.show');
    Route::patch('/{timetable}',\App\Http\Controllers\Timetable\UpdateController::class)->name('timetable.update');
    Route::delete('/{timetable}',\App\Http\Controllers\Timetable\DeleteController::class)->name('timetable.delete');
});

Route::group(['prefix' => 'task'], function (){
    Route::get('/',\App\Http\Controllers\Task\IndexController::class)->name('task.index');
    Route::get('/create',\App\Http\Controllers\Task\CreateController::class)->name('task.create');
    Route::post('/',\App\Http\Controllers\Task\StoreController::class)->name('task.store');
    Route::get('/{task}/edit',\App\Http\Controllers\Task\EditController::class)->name('task.edit');
    Route::get('/{task}',\App\Http\Controllers\Task\ShowController::class)->name('task.show');
    Route::patch('/{task}',\App\Http\Controllers\Task\UpdateController::class)->name('task.update');
    Route::delete('/{task}',\App\Http\Controllers\Task\DeleteController::class)->name('task.delete');
});

Route::group(['prefix' => 'attendance'], function (){
    Route::get('/',\App\Http\Controllers\Attendance\IndexController::class)->name('attendance.index');
    Route::get('/create',\App\Http\Controllers\Attendance\CreateController::class)->name('attendance.create');
    Route::get('/create/{task}',\App\Http\Controllers\Attendance\CreateGroupController::class)->name('attendance_group.create');
    Route::post('/',\App\Http\Controllers\Attendance\StoreController::class)->name('attendance.store');
    Route::get('/{attendance}/edit',\App\Http\Controllers\Attendance\EditController::class)->name('attendance.edit');
    Route::get('/{attendance}',\App\Http\Controllers\Attendance\ShowController::class)->name('attendance.show');
    Route::patch('/{task}/update',\App\Http\Controllers\Attendance\UpdateController::class)->name('attendance.update');
    Route::delete('/{attendance}',\App\Http\Controllers\Attendance\DeleteController::class)->name('attendance.delete');
});
