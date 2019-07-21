<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudioSocioEconomicoTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */

    // users in database

    public function up()
    {
        Schema::create('estudiosocioeconomico', function (Blueprint $table) {
            $table->increments('id_estudiosocioeconomico');
            $table->integer('id_postulante')->unsigned();
            $table->string('Estado');
            $table->string('municipio');
            $table->string('calle');
            $table->string('condicion');
            $table->double('ingresomensual');

            $table->foreign('id_postulante')->references('id_postulante')->on('postulantes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiosocioeconomico');
    }
}