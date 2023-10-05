<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getModels/{id}', [ProducerController::class, 'getModels']);

Route::get('/getCities/{id}', [CountyController::class, 'getCities']);

Route::get('/getCars', [ApiController::class, 'getCars']);
Route::get('/getCar/{id}', [ApiController::class, 'getCar']);

Route::get('/getCounties', [ApiController::class, 'getCounties']);
Route::get('/getCities/{id}', [ApiController::class, 'getCities']);



Route::post('/sendContact', [ApiController::class, 'sendContact']);

Route::get('/sendOrder', [ApiController::class, 'sendOrder']);
Route::get('/sendRelationTable', [ApiController::class, 'sendRelationTable']);
