<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Mostrar todos los pagos
    public function index()
    {
        return'hola';
        $payments = Payment::all();
        return response()->json($payments);
    }

    // Mostrar un solo pago
    public function show($id)
    {
        $payment = Payment::findOrFail($id);
        return response()->json($payment);
    }

    // Crear un nuevo pago
    public function store(Request $request)
    {
        $request->validate([
            'method' => 'required|string|max:50',
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'order_id' => 'required|integer|exists:orders,order_id',
        ]);

        $payment = Payment::create($request->all());
        return response()->json($payment, 201);
    }

    // Actualizar un pago existente
    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);

        $request->validate([
            'method' => 'sometimes|string|max:50',
            'date' => 'sometimes|date',
            'amount' => 'sometimes|numeric',
            'order_id' => 'sometimes|integer|exists:orders,order_id',
        ]);

        $payment->update($request->all());
        return response()->json($payment);
    }

    // Eliminar un pago
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return response()->json(['message' => 'Pago eliminado correctamente']);
    }
}