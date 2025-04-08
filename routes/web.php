<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\ShipmentController;
use App\Models\Payment;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mensaje', function () {
    return view('mensaje');
});


Route::post('/mensaje', [Payment::class, 'index'])->name('mensaje.enviar');

Route::get('/kakaroto', [ShipmentController::class, 'kakaroto'])->name('kakaroto');
