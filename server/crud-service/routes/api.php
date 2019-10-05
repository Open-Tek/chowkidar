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

// START of Floor Endpoints
Route::get('/floor/all', "Api\FloorRestController@all")->name('building.all');
Route::get('/floor/building/{id}/all', "Api\FloorRestController@allBySociety")->name("floor.building.all");
// END of Floor Endpoints

// START of Flat Endpoints
Route::get('/flat/all', "Api\FlatRestController@all")->name('building.all');
Route::get('/flat/floor/{id}/all', "Api\FlatRestController@allByFloor")->name("flat.floor.all");
// END of Flat Endpoints

// START of Watchman Endpoints
Route::get('/watchman/all', "Api\WatchmenRestController@all")->name('watchmen.all');
Route::get('/watchman/society/{id}/all', "Api\WatchmenRestController@allBySociety")->name("flat.society.all");
// END of Watchman Endpoints
