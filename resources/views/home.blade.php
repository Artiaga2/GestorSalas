@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Salas</div>

                <div class="panel-body">
                    {{--@if (session('status'))--}}
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
                    {{--@endif--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
