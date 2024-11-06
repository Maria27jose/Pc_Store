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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(50)->nombre_completo;
            $table->string(50)->nombre_usuario;
            $table->string(50)->contraseña;
            $table->string(50)->correo_electronico;
            $table->string(50)->direccion;
            $table->string(50)->telefono;
            $table->string(50)->codigo_postal;
            $table->date(50)->fecha_nacimiento;
            $table->string(50)->tipo_usuario;
            $table->string(50)->fecha_registro;
            $table->string(50)->historial;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
