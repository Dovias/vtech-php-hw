<?php

use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::delete('/conference/{conference}', [ConferenceController::class, 'delete']) -> name('conference.delete');
});

Route::middleware('non-auth')->group(function () {
});
