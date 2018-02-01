@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Salas hechas por {{$user->name}}</div>

                <div class="panel-body">
                    {{--@if (session('status'))--}}
                    @forelse($salas as $sala)
                        @include('salas.sala')
                    @empty
                        <p>No hay salas para mostrar.</p>
                    @endforelse
                    {{$salas->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection