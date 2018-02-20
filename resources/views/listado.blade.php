
@forelse($salas as $sala)
    <div class="small-12 column">
        @include('salas.sala')
    </div>
@empty
    <div class="row">
        <p>No hay mensajes para mostrar</p>
    </div>
@endforelse

<div class="text-center">
    {{ $salas->links() }}
</div>

@push('scripts')
    <script src="{{ asset('js/datos.js') }}" defer></script>
@endpush

