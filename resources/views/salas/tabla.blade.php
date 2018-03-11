@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <table id="tablaSalas" class="table table-dark table-striped table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Capacidad</th>
                <th>Disponibilidad</th>
                <th>Precio</th>
                <th>Caracteristicas</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tablaSalas as $sala)
                <tr>
                    <td>
                            <img class="draggable" src="{{$sala->imagen}}">
                    </td>
                    <td>
                        {{$sala->nombre}}
                    </td>
                    <td>{{$sala->tipo}}</td>
                    <td>{{$sala->capacidad}}</td>
                    <td>{{$sala->disponibilidad }}</td>
                    <td>{{$sala->precio }}€</td>

                    <td>
                        @foreach($sala->caracteristicasSalas() as $caracteristica)
                            <p>{{$caracteristica->nombre}}</p>
                        @endforeach
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection

@push('scripts')
    <script src="{{ asset('js/tablaSalas.js') }}"></script>
    {{--<script src="{{ asset('js/dragable.js') }}"></script>--}}

@endpush
