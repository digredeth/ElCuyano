<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movarts', function (Blueprint $table) {
            $table->string('cod_art');
            $table->integer('cod_mov')->unsigned();
            $table->integer('cant');

            $table->foreign('cod_art')->references('cod')
                  ->on('articulos');
            $table->foreign('cod_mov')->references('cod')
                  ->on('movimientos');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movarts');
    }
}
