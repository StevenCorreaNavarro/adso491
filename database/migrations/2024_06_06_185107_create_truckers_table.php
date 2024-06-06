<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('truckers', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direcciones');
            $table->string('poblaciones');
            $table->integer('salario');            //************************************** */
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('truckers');
    }
};
