<?php

namespace App\Models;

use App\Models\equiposTecnologia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entregaEquiposTecnologia extends Model
{
    use HasFactory;

    protected $fillable = [
        'fechaEntrega',
        'tipoNovedad',
        'ubicacion',
        'idFuncionario',
        'idEquipo',
        'proceso',
        'observaciones',
    ];
    // Definir la relación uno a uno inversa con EquiposTecnologia
    public function equiposTecnologia()
    {
        return $this->belongsTo(equiposTecnologia::class, 'idEquipo');
    }
}
