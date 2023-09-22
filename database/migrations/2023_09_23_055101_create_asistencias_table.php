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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->char('asistencia');
            $table->unsignedBigInteger('id_matricula')->nullable();
            $table->foreign('id_matricula')->references('id')->on('matriculas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
