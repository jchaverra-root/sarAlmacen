<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipos_tecnologias', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->string('ubicacionActual');
            $table->integer('idUsuario');
            $table->string('observaciones');
            $table->string('serialProducto');
            $table->string('tipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('imei');
            $table->string('procesador');
            $table->string('ram');
            $table->string('discoDuro');
            $table->string('sistemaOperativo');
            $table->string('licenciaSistemaOperativo');
            $table->string('office');
            $table->string('licenciaOffice');
            $table->string('antivirus');
            $table->integer('idProveedor');
            $table->integer('idCompra');
            $table->timestamps();

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos_tecnologias');
    }
};
