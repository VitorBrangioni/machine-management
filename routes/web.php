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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/machines', 'MachineViewController@index')->name('machines');

Route::get('/status', 'StatusViewController@index')->name('status');

Route::get('/', 'DashboardViewController@index')->name('dashboard');

Route::get('/sensor', 'SensorViewController@index')->name('sensor');

Route::post('/delete-status', 'StatusViewController@delete')->name('delete-status');

Route::post('/create-status', 'StatusViewController@create')->name('create-status');

Route::post('/update-status', 'StatusViewController@update')->name('update-status');

/* MACHINE */
Route::post('/create-machine', 'MachineViewController@create')->name('create-machine');

Route::post('/update-machine', 'MachineViewController@update')->name('update-machine');

Route::post('/delete-machine', 'MachineViewController@delete')->name('delete-machine');

Route::post('/update-sensor', 'SensorViewController@update')->name('update-sensor');