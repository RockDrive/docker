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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("index", [\App\Http\Controllers\RestController::class, "index"]);


Route::get("import", [\App\Http\Controllers\KrialController::class, "import"]);
Route::get("export", [\App\Http\Controllers\KrialController::class, "export"]);
