<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ReadingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/get-card-names', [CardController::class, 'getCardNames']);
Route::get('/card/{id}', [CardController::class, 'show']);



Route::post('/generate-reading', [ReadingController::class, 'generateReading']);
