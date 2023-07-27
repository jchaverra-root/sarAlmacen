<?php

namespace App\Models;

use App\Models\entregaEquiposTecnologia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equiposTecnologia extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'ubicacionActual',
        'idUsuario',
        'observaciones',
        'serialProducto',
        'tipo',
        'marca',
        'modelo',
        'imei',
        'procesador',
        'ram',
        'discoDuro',
        'sistemaOperativo',
        'licenciaSistemaOperativo',
        'office',
        'licenciaOffice',
        'antivirus',
        'idProveedor',
        'idCompra',
    ];
    // Definir la relación uno a uno con EntregaEquipoTecnologia
    public function entregaEquipoTecnologia()
    {
        return $this->hasMany(entregaEquiposTecnologia::class, 'idEquipo');
    }
}
