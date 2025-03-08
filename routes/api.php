<?php

use App\Http\Controllers\Api\AgentController;
use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthenticationController::class, 'login']);
    Route::post('register', [AuthenticationController::class, 'register']);
    Route::post('forgot', [AuthenticationController::class, 'forgot']);
    Route::post('reset', [AuthenticationController::class, 'reset']);
    Route::post('verification', [AuthenticationController::class, 'verification']);
});

Route::prefix('profile')->group(function () {
    Route::post('details', [AuthenticationController::class, 'details']);
    Route::post('change-details', [AuthenticationController::class, 'changeDetails']);
    Route::post('change-password', [AuthenticationController::class, 'changePassword']);
    Route::post('logout', [AuthenticationController::class, 'logout']);
});

Route::prefix('agent')->group(function () {
    Route::get('list', [AgentController::class, 'index']);
    Route::put('show/{id}', [AgentController::class, 'show']);
    Route::post('store', [AgentController::class, 'store']);
    Route::patch('update/{id}', [AgentController::class, 'update']);
    Route::delete('delete/{id}', [AgentController::class, 'delete']);
});

Route::prefix('customer')->group(function () {
    Route::get('list', [CustomerController::class, 'index']);
    Route::put('show/{id}', [CustomerController::class, 'show']);
    Route::post('store', [CustomerController::class, 'store']);
    Route::patch('update/{id}', [CustomerController::class, 'update']);
    Route::delete('delete/{id}', [CustomerController::class, 'delete']);
});

Route::prefix('blog')->group(function () {
    Route::get('list', [BlogController::class, 'index']);
    Route::put('show/{id}', [BlogController::class, 'show']);
    Route::post('store', [BlogController::class, 'store']);
    Route::patch('update/{id}', [BlogController::class, 'update']);
    Route::delete('delete/{id}', [BlogController::class, 'delete']);
});

Route::prefix('property')->group(function () {
    Route::get('list', [PropertyController::class, 'index']);
    Route::put('show/{id}', [PropertyController::class, 'show']);
    Route::post('store', [PropertyController::class, 'store']);
    Route::patch('update/{id}', [PropertyController::class, 'update']);
    Route::delete('delete/{id}', [PropertyController::class, 'delete']);
});

Route::prefix('service')->group(function () {
    Route::get('list', [ServiceController::class, 'index']);
    Route::put('show/{id}', [ServiceController::class, 'show']);
    Route::post('store', [ServiceController::class, 'store']);
    Route::patch('update/{id}', [ServiceController::class, 'update']);
    Route::delete('delete/{id}', [ServiceController::class, 'delete']);
});
