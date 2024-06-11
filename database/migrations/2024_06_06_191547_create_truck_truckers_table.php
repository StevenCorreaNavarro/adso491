<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    //cambiando el orden trucker truk
    {
        Schema::create('truck_trucker', function (Blueprint $table) {

            $table->id();
            //creacion de tablas foraneas
            $table->unsignedBigInteger('truck_id')->nullable();
            $table->unsignedBigInteger('trucker_id')->nullable();

            $table->foreign('truck_id')
                ->references('id')
                ->on('trucks')->onDelete('cascade');

            $table->foreign('trucker_id')
                ->references('id')
                ->on('truckers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('truck_trucker');
    }
};
