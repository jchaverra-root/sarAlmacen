<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Http\Requests\StoreInventarioRequest;
use App\Http\Requests\UpdateInventarioRequest;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inventarios.index')->with(['inventarios' => Inventario::orderby('id','DESC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function guardar()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function mostrar(StoreInventarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar(Inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function cargar(UpdateInventarioRequest $request, Inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminar(Inventario $inventario)
    {
        //
    }
}
