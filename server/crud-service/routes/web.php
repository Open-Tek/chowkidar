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

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::redirect('/', '/dashboard');
    Route::get('/dashboard', function () {
        return view('layouts.base');
    })->name('dashboard');

    //Batch Routes
    Route::get('/society/datatables', 'SocietyController@datatables')->name('society.datatables');
    Route::get('/society/all', 'SocietyController@all')->name('society.all');
    Route::resource('/society', 'SocietyController');
});
