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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string(50)->fecha_hora_pedido;
            $table->int()->monto_total;
            $table->string(50)->contenido;
            $table->int()->cantidad;
            $table->string(50)->estado;
            $table->string(50)->direccionn;
            $table->string(50)->fecha_entrega_estimada;
            $table->string(50)->direccion_facturacion;
            $table->id()->user_id;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
