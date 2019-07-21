<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacionPostulanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // users in database

    public function up()
    {
        Schema::create('informacionpostulante', function (Blueprint $table) {
            $table->increments('id_informacionpostulante');
            $table->integer('id_postulante')->unsigned();
            $table->string('nombre');
            $table->string('apellidopaterno');
            $table->string('apellidomaterno');
            $table->integer('edad');
            $table->string('nombretutor');
            $table->string('apellidopaternotutor');
             $table->foreign('id_postulante')->references('id_postulante')->on('postulantes');
            $table->string('apellidomaternotutor');
             $table->string('parentesco');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacionpostulante');
    }
}