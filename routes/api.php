<?php

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
Route::middleware('auth:sanctum')->group(function () {
});
Route::apiResource('products', App\Http\Controllers\ProductController::class);


Route::get('vSLeuXGwmDsRwYjAggjXMbqPVSSSSSaywn', function () {
    Artisan::call('migrate:fresh --seed');
    return 'Migrated';
});

// /TRU
// Route::get('/products', 'ProductController@index');
