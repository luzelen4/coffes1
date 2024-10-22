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
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
    $table->string('nombre');
    $table->text('descripcion');
    $table->integer('precio');
    $table->integer('stock');
    $table->string('tipo_cafe');
    $table->float('intensidad');  // Intensidad del café de 0 a 10
    $table->boolean('disponible'); // Si está disponible para la venta
    $table->string('origen'); // País de origen
    $table->string('procesamiento'); // Método de procesamiento (lavado, natural, etc.)
    $table->date('fecha_tostado'); // Fecha de tostado del café
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
