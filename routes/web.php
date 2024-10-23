<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', [NoteController::class, 'index']);
Route::get('/notes/create', [NoteController::class, 'create']);
Route::post('/notes', [NoteController::class, 'store']);
Route::get('/notes/{id}', [NoteController::class, 'show']);
