<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// START of Building Controller
Route::get('/building/all', "Api\BuildingRestController@all")->name('building.all');
Route::get('/building/society/{id}/all', "Api\BuildingRestController@allBySociety")->name("building.society.all");
// END of Building Controller
