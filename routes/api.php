<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\ProviderController;

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

Route::group([
    'prefix' => 'user'
], function () {
    Route::get('', [UserController::class, 'index']);
    Route::get('show/{user}', [UserController::class, 'show']);
    Route::post('store', [UserController::class, 'store']);
});

Route::group([
    'prefix' => 'phone'
], function () {
    Route::get('', [PhoneController::class, 'index']);
    Route::get('show/{phone}', [PhoneController::class, 'show']);
    Route::post('store', [PhoneController::class, 'store']);
    Route::put('update/{phone}', [PhoneController::class, 'update']);
    Route::delete('destroy/{phone}', [PhoneController::class, 'destroy']);
    Route::get('generate', [PhoneController::class, 'generate']);
});

Route::group([
    'prefix' => 'provider'
], function () {
    Route::get('', [ProviderController::class, 'index']);
});

Route::group([
    'prefix' => 'firebase'
], function () {
    Route::get('/set', [FirebaseController::class, 'set']);
});
