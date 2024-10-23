<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', [NoteController::class, 'index']);
