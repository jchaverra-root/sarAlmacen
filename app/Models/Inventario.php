<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'periodo',
        'origen',
        'destino',
        'nit',
        'codigoProducto',
        'serialProducto',
        'cantidad',
        'precioUnitario',
    ];
}
