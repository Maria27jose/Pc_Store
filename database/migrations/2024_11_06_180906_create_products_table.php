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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string(50)->nombre;
            $table->string(50)->marca;
            $table->string(50)->modelo;
            $table->string(50)->generaion;
            $table->string(50)->descripcion;
            $table->int()->precio;
            $table->string(50)->disponibilidad;
            $table->string(50)->ficha_tecnica;
            $table->date()->fecha_lanzamiento;
            $table->id()->category_id;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
