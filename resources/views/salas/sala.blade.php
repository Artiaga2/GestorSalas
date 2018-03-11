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
                <th>Borrar/Actualizar</th>
            </tr>
            </thead>
            <tbody>
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

                    <td>
                        @can('delete', $salas)
                            <form action="{{ Route('salas.delete', $sala->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="button alert">Borrar</button>
                            </form>
                        @endcan
                    </td>

                </tr>
            </tbody>
        </table>
    </div>