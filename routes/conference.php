<?php

use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::view('/conferences', 'conferences')->name('conferences');

Route::middleware('auth')->group(function () {
    Route::view('/conference/add', 'conference.add')->name('conference.add');
    Route::post('/conference/add', [ConferenceController::class, 'add']);
    Route::delete('/conference/{conference}', [ConferenceController::class, 'delete']) -> name('conference.delete');
});

Route::middleware('non-auth')->group(function () {
});
