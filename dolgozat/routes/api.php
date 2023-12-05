<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipatesController;
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

Route::get('/agencies/withes', [AgencyController::class, 'withes']);
Route::post('/events/update', [EventController::class, 'update']);
Route::post('/participates/hozzaad', [ParticipatesController::class, 'ujEsemenyHozzaAd']);
Route::put('/participates/jelenlet', [ParticipatesController::class, 'jelenLet']);

