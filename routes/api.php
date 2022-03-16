<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

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
Route::resource('work',WorkController::class);
Route::get('/demo', [WorkController::class, 'arrayDemo']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
