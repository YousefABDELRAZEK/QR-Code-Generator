<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

Route::get('/', [QrController::class, 'index'])->name('qr-code.index');
Route::post('/', [QrController::class, 'generate'])->name('qr-code.generate');
