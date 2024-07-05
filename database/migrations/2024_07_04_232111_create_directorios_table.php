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
        Schema::create('directorios', function (Blueprint $table) {
            $table->string('codigoEntrada', 5);
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('correo', 50);
            $table->string('telefono', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directorios');
    }
};
