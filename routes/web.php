<?php

use App\Http\Controllers\ControllerMultilenguaje;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerMultilenguaje::class, 'index'])->name('english.route');
Route::get('/es', [ControllerMultilenguaje::class, 'index'])->name('spanish.route');
