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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('aluno', 'App\Http\Controllers\AlunoController')->middleware('jwt.auth');
Route::apiResource('curso', 'App\Http\Controllers\AlunoController')->middleware('jwt.auth');
Route::apiResource('aluno-curso', 'App\Http\Controllers\AlunoController')->middleware('jwt.auth');

Route::post('login',"App\Http\Controllers\AuthController@login");
Route::post('logout',"App\Http\Controllers\AuthController@logout");
Route::post('refresh',"App\Http\Controllers\AuthController@refresh")->middleware('jwt.auth');
Route::post('me',"App\Http\Controllers\AuthController@me")->middleware('jwt.auth');