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

Route::post('auth/login/{phone}/',  'Api\AuthController@generateOtp')->where('phone', "[0-9]{10}");
Route::post('auth/verify/{phone}/{otp}/', 'Api\AuthController@generateToken')->where('phone', "[0-9]{10}")->where('otp', '[0-9]{6}');
Route::post('auth/refresh/{refreshToken}/', 'Api\AuthController@refresh');


Route::get('/subject/{id}/chapter/all', 'Api\SubjectRestController@getAllChapters');
Route::get("/subject/all/student/{student_id}", "Api\SubjectRestController@getAllByStudent");

Route::post('/question', 'Api\QuestionRestController@store')->name('question.store');