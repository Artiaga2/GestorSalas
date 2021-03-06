@auth()
    <div class="container my-5 bg-primary">
    <form action="{{ url('/') }}/crear" method="post">
        {{ csrf_field() }}
        <div class="form-group @if( $errors->has('nombre'))has-error @endif">
            <label for="nombre" class="col-md-4 control-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce un nombre">
        </div>
        @if($errors->has('nombre'))
            @foreach($errors->get('nombre') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group @if( $errors->has('imagen'))has-error @endif">
            <label for="image" class="col-md-4 control-label">Imagen</label>
            <input type="text" class="form-control" id="image" name="imagen">
        </div>
        @if($errors->has('imagen'))
            @foreach($errors->get('imagen') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group @if( $errors->has('tipo'))has-error @endif">
            <label for="tipo" class="col-md-4 control-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo">
        </div>
        @if($errors->has('tipo'))
            @foreach($errors->get('tipo') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif


        <div class="form-group @if( $errors->has('capacidad'))has-error @endif">
            <label for="capacidad" class="col-md-4 control-label">Capacidad</label>
            <input type="text" class="form-control" id="capacidad" name="capacidad">
        </div>
        @if($errors->has('capacidad'))
            @foreach($errors->get('capacidad') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group @if( $errors->has('disponibilidad'))has-error @endif">
            <label for="disponibilidad" class="col-md-4 control-label">Disponibilidad</label>
            <select class="form-control" id="disponibilidad" name="disponibilidad">
                <option value="libre">Libre</option>
                <option value="ocupada">Ocupado</option>
                <option value="cerrada">Cerrada</option>
            </select>
        </div>
        @if($errors->has('disponibilidad'))
            @foreach($errors->get('disponibilidad') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group @if( $errors->has('precio'))has-error @endif">
            <label for="precio" class="col-md-4 control-label">precio</label>
            <input type="text" class="form-control" id="precio" name="precio">
        </div>
        @if($errors->has('precio'))
            @foreach($errors->get('precio') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <button class="flex-md-column" type="submit">Enviar</button>
    </form>
    </div>
@endauth

@push('scripts')
    {{--<script src="{{ asset('js/autocomplete.js') }}" defer></script>--}}


@endpush



