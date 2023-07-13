<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'periodo',
        'entrada',
        'salida',
        'origen',
        'destino',
        'ubicacionActual',
        'nit',
        'codigoProducto',
        'serialProducto',
        'cantidad',
        'precioUnitario',
    ];
}
