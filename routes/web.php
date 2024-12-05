<?php

require "authentication.php";
require "conference.php";

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/conferences', 'conferences')->name('conferences');
