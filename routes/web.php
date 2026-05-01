<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelulusanController;

Route::get('/', [KelulusanController::class, 'index'])->name('home');
Route::post('/search', [KelulusanController::class, 'search'])->name('kelulusan.search');
