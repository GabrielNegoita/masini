<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});



Route::get('/cars', [CarController::class, 'index']);
Route::get('/car/{id}', [CarController::class, 'show']);
Route::get('/cars/new', [CarController::class, 'create'],);
Route::get('/cars/edit/{id}', [CarController::class, 'edit'],);
Route::post('/cars/insert', [CarController::class, 'store'],);
Route::post('/cars/update/{id}', [CarController::class, 'update']);
Route::get('/cars/delete/{id}', [CarController::class, 'destroy']);



Route::get('/producers', [ProducerController::class, 'index']);
Route::get('/producers/new', [ProducerController::class, 'create']);
Route::post('/producers/insert', [ProducerController::class, 'store']);
Route::get('/producers/delete/{id}', [ProducerController::class, 'destroy']);



Route::get('/counties', [CountyController::class, 'index']);
Route::get('/counties/new', [CountyController::class, 'create']);
Route::post('/counties/insert', [CountyController::class, 'store']);
Route::get('/counties/edit/{id}', [CountyController::class, 'edit']);
Route::get('/counties/delete/{id}', [CountyController::class, 'destroy']);



Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/delete/{id}', [CityController::class, 'destroy']);
Route::post('/cities/insert', [CityController::class, 'store']);



Route::get('/locations', [LocationController::class, 'index']);
Route::get('/locations/new', [LocationController::class, 'create']);
Route::post('/locations/insert', [LocationController::class, 'store']);
Route::get('/locations/delete/{id}', [LocationController::class, 'destroy']);



Route::get('/carModels', [CarModelController::class, 'index']);
Route::get('/carModels/new', [CarModelController::class, 'create']);
Route::post('/carModels/insert', [CarModelController::class, 'store']);
Route::get('/carModels/delete/{id}', [CarModelController::class, 'destroy']);



Route::get('/messages', [ContactController::class, 'index']);
Route::get('/messages/show/{id}', [ContactController::class, 'show']);
Route::get('/messages/delete/{id}', [ContactController::class, 'destroy']);



Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/show/{id}', [OrderController::class, 'show']);
Route::get('/orders/delete/{id}', [OrderController::class, 'destroy']);