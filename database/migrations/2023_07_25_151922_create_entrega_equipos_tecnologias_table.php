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
        Schema::create('entrega_equipos_tecnologias', function (Blueprint $table) {
            $table->id();
            $table->date('fechaEntrega');
            $table->string('tipoNovedad');
            $table->string('ubicacion');
            $table->unsignedBigInteger('idFuncionario')->unique();
            $table->unsignedBigInteger('idEquipo');
            $table->string('proceso');
            $table->string('observaciones');
            $table->timestamps();

            $table->foreign('idEquipo')->references('id')->on('equipos_tecnologias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrega_equipos_tecnologias');
    }
};
