<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubController;

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
Route::get("/drinks",[PubController::class, "getDrinks"]);
Route::get("/names",[PubController::class, "getDrinkNames"]);
Route::get("/data",[PubController::class, "getNameAndQuantity"]);
Route::get("/selected",[PubController::class, "getSelectedDrink"]);
Route::get("/number",[PubController::class, "getSelectedNumber"]);
Route::get("/insert",[PubController::class, "insertDrink"]);
Route::get("/modify",[PubController::class, "modifyDrink"]);
Route::get("/delete",[PubController::class, "deleteDrink"]);
