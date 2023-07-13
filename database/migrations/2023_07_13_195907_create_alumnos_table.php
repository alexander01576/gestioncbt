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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->text('matricula');
            $table->text('nombre');
            $table->text('ap_pat');
            $table->text('ap_mat');
            $table->date('fecha_nacimiento');
            $table->text('genero')->nullable();
            $table->text('curp');
            $table->text('correo')->nullable();
            $table->boolean('estatus_inscripcion')->default(1);
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->boolean('estatus')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
