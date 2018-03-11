@auth()
    <div class="container my-5 bg-primary">
        <form action="{{ url('/') }}/alquilar" method="post">
            {{ csrf_field() }}
            <div class="form-group @if( $errors->has('nombre'))has-error @endif">
                <label for="nombre" class="col-md-4 control-label">Nombre</label>
                <select id="nombre">
                    @foreach($salas as $sala)
                    <option value="sala">{{$sala->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <button class="flex-md-column" type="submit">Enviar</button>
        </form>
    </div>
@endauth

@push('scripts')
    {{--<script src="{{ asset('js/autocomplete.js') }}" defer></script>--}}


@endpush
