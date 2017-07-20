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

//главная страница
Route::get('/', 'Controller@getMainPage');

//отделы
Route::get('/departments', 'DepartmentController@getDepartments');
Route::post('/department/add', 'DepartmentController@postAddDepartment');
Route::post('/department/edit', 'DepartmentController@postEditDepartment');
Route::post('/department/del', 'DepartmentController@postDelDepartment');

//сотрудники
Route::get('/workers', 'WorkerController@getWorkers');