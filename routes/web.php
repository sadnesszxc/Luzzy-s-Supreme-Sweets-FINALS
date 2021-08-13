<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('delete/{id}', [DashboardController::class, 'delete']);

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name
    ('dashboard');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/sampledata', 'App\Http\Controllers\DashboardController@sampledata')->name
    ('dashboard.sampledata');
});

Route::resource('users', 'App\Http\Controllers\DashboardController');

Route::get('delete/{id}', [DashboardController::class, 'delete']);

require __DIR__.'/auth.php';

