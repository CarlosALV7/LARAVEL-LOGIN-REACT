<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategorias', function (Blueprint $table) {
            $table->smallIncrements('id')->comment('ID');
            $table->unsignedSmallInteger('categoria_id')->comment('ID categoría');
            $table->string('subcategoria', 50)->comment('Subcategoría');
            $table->enum('estatus', ['activa', 'inactiva'])->comment('Estatus');
            // llaves foráneas
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategorias');
    }
};
