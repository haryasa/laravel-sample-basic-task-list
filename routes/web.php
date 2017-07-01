<?php

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

/**
 * Show task dashboard.
 */
Route::get('/', 'TasksController@index');

/**
 * Add new task.
 */
Route::post('/tasks', 'TasksController@store');

/**
 * Delete task.
 */
Route::delete('/tasks/{task}', 'TasksController@destroy');

/**
 * Update task status.
 */
Route::patch('/tasks/{task}', 'TasksController@update');