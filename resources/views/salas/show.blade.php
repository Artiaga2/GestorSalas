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
                <td>{{ $salas['nombre'] }}</td>
                <td>{{ $salas['tipo'] }}</td>
                <td>{{ $salas['capacidad'] }}</td>
                <td>{{ $salas['disponibilidad'] }}</td>
            </tr>
        </table>
    </div>
@endsection