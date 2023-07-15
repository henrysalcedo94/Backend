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
        Schema::create('api_cruds', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre");
            $table->string("Apellido");
            $table->string("Tipo_Identificacion");
            $table->string("#_Identificacion");
            $table->string("Telefono");
            $table->string("Email");
            $table->string("Profesion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_cruds');
    }
};
