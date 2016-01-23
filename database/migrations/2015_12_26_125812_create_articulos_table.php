<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->integer('cod')->unsigned()->primary();
            $table->string('descripcion');
            $table->integer('stock');
            $table->integer('limite');
            $table->integer('cod_proveedor')->unsigned()->nullable();
            $table->foreign('cod_proveedor')->references('cod')
                  ->on('proveedors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articulos');
    }
}
