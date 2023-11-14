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
        Schema::create('paraderos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('paradero', 10);
            $table->string('recorrido',45);
            $table->string('patente',10);
            $table->string('direccion',45);

            $table->string('latitud',15);
            $table->string('longitud',15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paraderos');
    }
};
