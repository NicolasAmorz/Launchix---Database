@extends('layouts.app') 
<!-- Asumiendo que tienes un layout base llamado app.blade.php -->

@section('content')
    <div class="container">
        <h1>Listado de Envíos</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('shipments.create') }}" class="btn btn-primary">Crear Envío</a>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dirección</th>
                    <th>Estado</th>
                    <th>Order ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td>{{ $shipment->id }}</td>
                        <td>{{ $shipment->address }}</td>
                        <td>{{ $shipment->status }}</td>
                        <td>{{ $shipment->order_id }}</td>
                        <td>
                            <a href="{{ route('shipments.show', $shipment->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('shipments.edit', $shipment->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('shipments.destroy', $shipment->id) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
               
            </tbody>
        </table>
    </div>
@endsection