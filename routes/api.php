<?php

use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('countries', [CountryController::class, 'index'])->middleware('auth:api');
Route::resource('countries', CountryController::class)->except('index');
Route::resource('settings', SettingController::class)->except(['store', 'destroy']);

Route::get('/auth/callback', [AuthController::class, 'handleCallback']);
