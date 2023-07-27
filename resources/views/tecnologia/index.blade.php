@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">ESTE ES EL MENU IT</h1>
        <div id="inventarios-container">
            <div class="table-responsive">
                <table class="table table-bordered" id="tablaIndex">
                    <thead>
                        <tr>
                            <th>ID Equipo</th>
                            <th>Ubicacion Actual</th>
                            <th>Tipo</th>
                            <th>ID Usuario</th>
                            <th>Marca</th>
                            <th>ID Entrega</th>
                            <!-- <th class="text-center">Acciones</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventarioTecnologia as $inventario)
                            <tr>
                                <td>{{$inventario->id}}</td>
                                <td>{{$inventario->ubicacionActual}}</td>
                                <td>{{$inventario->tipo}}</td>
                                <td>{{$inventario->idUsuario}}</td>
                                <td>{{$inventario->marca}}</td>
                                <td>
                                    @php
                                    $entregas = $inventario->entregas_por_equipo ? explode(',', $inventario->entregas_por_equipo) : null;
                                    @endphp
                                    @if ($entregas)
                                        @foreach ($entregas as $entregaId)
                                            <a href="#">{{ $entregaId }}</a>
                                            @if (!$loop->last)
                                                /
                                            @endif
                                        @endforeach
                                    @else
                                        NO ASIGNADO
                                    @endif
                                </td>
                                <!-- <td class="text-center">
                                </td>   -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Realizar la llamada Ajax
        $.ajax({
            url: '/inventarios', // Ruta a la función del controlador que retorna los inventarios
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                // Insertar los datos en el contenedor
                $('#inventarios-container').html(data);
            },
            error: function() {
                // Manejar el error en caso de que ocurra
                alert('Ha ocurrido un error al cargar los inventarios.');
            }
        });
    </script>

@endsection