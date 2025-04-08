<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentController;
use app\Http\Controllers\ShipmentController;
use App\Models\Shipment;
use app\Models\Payment;

Route::get('/payments', [PaymentController::class, 'index']);      // Listar todos
Route::get('/payments/{id}', [PaymentController::class, 'show']);  // Mostrar uno
Route::post('/payments', [PaymentController::class, 'store']);     // Crear
Route::put('/payments/{id}', [PaymentController::class, 'update']); // Actualizar
Route::delete('/payments/{id}', [PaymentController::class, 'destroy']); // Eliminar



Route::get('/shipment', [ShipmentController::class, 'index']);      // Listar todos
Route::get('/shipment/{id}', [ShipmentController::class, 'show']);  // Mostrar uno
Route::post('/shipment', [ShipmentController::class, 'store']);     // Crear
Route::put('/shipment/{id}', [ShipmentController::class, 'update']); // Actualizar
Route::delete('/shipment/{id}', [ShipmentController::class, 'destroy']); // Eliminar




Route::apiResource('payments', PaymentController::class);

