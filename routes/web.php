<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('dashboard')->name('dashboard.')->group(function() {
    Route::get('/', 'Dashboard\DashboardController@index')->name('index');

    Route::resource('admins', 'Dashboard\AdminController')
        ->except(['show', 'edit', 'update'])
        ->middleware('can:is-head-admin');
});

Auth::routes([
    'confirm' => false,
    'reset' => false,
    'verify' => false
]);
