<div class="row sala">
    <div class="col-md-2">
        <img src="{{ $sala['image'] }}?{{ $sala['id'] }}" alt="">
    </div>
    <div class="col-md-10">
        <p class="sala-text">{{ $sala->nombre }}</p>
        <p><strong>Tipo:</strong> {{ $sala['tipo'] }}</p>
        <p><strong> Capacidad:</strong> {{$sala['capacidad']}}</p>
        <p><strong> Disponibilidad:</strong> {{$sala['disponibilidad']}}</p>
        <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($sala->created_at)->format('d/m/Y') }}</p>
    </div>

</div>