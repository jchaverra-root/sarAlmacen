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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('descripcion');
            $table->year('periodo');
            $table->date('entrada');
            $table->date('salida');
            $table->string('origen');
            $table->string('destino');
            $table->string('ubicacionActual');
            $table->string('nit');
            $table->string('codigoProducto');
            $table->string('serialProducto');
            $table->integer('cantidad');
            $table->decimal('precioUnitario', 12, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
