@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">ESTE ES EL MENU PRINCIPAL</h1>
        <div id="inventarios-container">
            <div class="table-responsive">
                <table class="table table-bordered" id="tablaIndex">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ubicacion Actual</th>
                            <th>NIT</th>
                            <th>Descripcion</th>
                            <th>Periodo</th>
                            <!-- <th class="text-center">Acciones</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventarios as $inventario)
                            <tr>
                                <td>{{$inventario->id}}</td>
                                <td>{{$inventario->ubicacionActual}}</td>
                                <td>{{$inventario->nit}}</td>
                                <td>{{$inventario->descripcion}}</td>
                                <td>{{$inventario->periodo}}</td>
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