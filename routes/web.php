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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('patients', 'PatientsController');
Route::resource('roles', 'RolesController');
Route::resource('departments', 'DepartmentsController');
Route::resource('staffs', 'StaffsController');
Route::resource('wards', 'WardsController');
Route::resource('inpatients', 'InpatientsController');
Route::resource('outpatients', 'OutpatientsController');
Route::resource('billings', 'BillingsController');
Route::resource('vhis', 'VhisController');
Route::resource('consultations', 'ConsultationsController');
Route::resource('users', 'UsersController');


