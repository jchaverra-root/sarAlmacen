@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">ESTE ES EL MENU PRINCIPAL</h1>
        <div class="table-responsive">
                <table class="table table-bordered" id="tablaIndex">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ubicacion Actual</th>
                            <th>NIT</th>
                            <th>Descripcion</th>
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
                                <!-- <td class="text-center">

                                </td>   -->
                            </tr>
                        @endforeach
                    </tbody>   
                </table>
            </div>
    </div>
@endsection