<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
       Schema::create('productos', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->decimal('precio', 10, 2);
    $table->integer('stock');
    $table->text('descripcion')->nullable();

    $table->foreignId('categoria_id')
          ->constrained('categorias')
          ->onDelete('cascade');

    $table->timestamps();
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos'); // 👈 agregado: elimina la tabla si se revierte la migración
    }
};
