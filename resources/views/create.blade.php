@extends('layouts.app')

@section('content')
    <form action="{{ url('/') }}/salas/create" method="post">
        {{ csrf_field() }}
        <div class="form-group @if( $errors->has('nombre'))has-error @endif">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce un nombre">
        </div>
        @if($errors->has('nombre'))
            @foreach($errors->get('nombre') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif
    </form>
@endsection