<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

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

Route::group([
    'prefix' => 'firebase'
], function () {
    Route::get('view', [FirebaseController::class, 'view'])->name('firebase.view');
    Route::get('set', [FirebaseController::class, 'set'])->name('firebase.set');
    Route::get('remove', [FirebaseController::class, 'remove'])->name('firebase.remove');
});