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
        Schema::create('registro_punto_venta', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_entrega');
            $table->integer('cantidad_entrega');
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade'); /////referencias a la tabla para ser llave foranea
            $table->foreignId('encargado_id')->constrained('encargados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_punto_venta');
    }
};
