@extends('layouts.app')

@section('content')
    @forelse($salas as $sala)
        <div class="row sala">
            <div class="col-md-2">
                <img src="{{ $sala['image'] }}?{{ $sala['id'] }}" alt="">
            </div>
            <div class="col-md-10">
                <p class="sala-text">{{ $sala['nombre'] }}</p>
                <p><strong>Tipo:</strong> {{ $sala['tipo'] }}</p>
                <p><strong> Capacidad:</strong> {{$sala['capacidad']}}</p>
                <p><strong> Disponibilidad:</strong> {{$sala['disponibilidad']}}</p>

            </div>
        </div>
    @empty
        <p>No hay salas para mostrar.</p>
    @endforelse
@endsection