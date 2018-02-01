@extends('layouts.app')

@section('content')
    <div>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Capacidad</th>
                <th>Disponibilidad</th>
            </tr>
            <tr>
                <td>{{ $sala['nombre'] }}</td>
                <td>{{ $sala['tipo'] }}</td>
                <td>{{ $sala['capacidad'] }}</td>
                <td>{{ $sala['disponibilidad'] }}</td>
            </tr>
        </table>
    </div>
@endsection