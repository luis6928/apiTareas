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
        Schema::create('usuarios_tarea', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tareas');
            $table->unsignedBigInteger('usuario');
            $table->foreign('tareas')->references('id')->on('tareas');
            $table->foreign('usuario')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_tarea');
    }
};
