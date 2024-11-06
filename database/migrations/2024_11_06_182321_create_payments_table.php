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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string(50)->fecha_hora;
            $table->int()->monto_total;
            $table->string(50)->metodo_pago;
            $table->int()->numero_autorizacion;
            $table->string(50)->direccion_facturacion;
            $table->int()->numero_transaccion;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
