<?php

namespace App\Http\Controllers;

use App\Models\equiposTecnologia;
use App\Models\Inventario;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreequiposTecnologiaRequest;
use App\Http\Requests\UpdateequiposTecnologiaRequest;

class EquiposTecnologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $inventarios = equiposTecnologia::orderBy('id', 'DESC')->get();
    //     if (request()->ajax()) {
    //         return view('inventarioTecnologia.lista')->with(['inventarioTecnologia' => $inventarios]);
    //     }
    //     return view('tecnologia.index')->with(['inventarioTecnologia' => $inventarios]);
    // }

    // public function indesx()
    // {

    //     // $inventarios = equiposTecnologia::with('entregaEquipoTecnologia')->orderBy('id', 'DESC')->get();

    //     // if (request()->ajax()) {
    //     //     return view('inventarioTecnologia.lista')->with(['inventarioTecnologia' => $inventarios]);
    //     // }

    //     // return view('tecnologia.index')->with(['inventarioTecnologia' => $inventarios]);
    //     return view('tecnologia.index')->with(['inventarioTecnologia' => equiposTecnologia::all()]);
    // }

    public function index()
    {
        $query = "
            SELECT et.id, et.ubicacionActual, et.tipo, et.idUsuario, et.marca, GROUP_CONCAT(eet.id) AS entregas_por_equipo
            FROM equipos_tecnologias et
            LEFT JOIN entrega_equipos_tecnologias eet ON et.id = eet.idEquipo 
            GROUP BY et.id, et.ubicacionActual, et.tipo, et.idUsuario, et.marca
        ";
        $equiposTecnologia = DB::select($query);
        return view('tecnologia.index', ['inventarioTecnologia' => $equiposTecnologia]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreequiposTecnologiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(equiposTecnologia $equiposTecnologia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(equiposTecnologia $equiposTecnologia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateequiposTecnologiaRequest $request, equiposTecnologia $equiposTecnologia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(equiposTecnologia $equiposTecnologia)
    {
        //
    }
}
