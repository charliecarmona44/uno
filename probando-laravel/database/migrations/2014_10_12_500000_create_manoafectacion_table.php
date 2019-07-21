<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManoAfectacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // users in database

    public function up()
    {
        Schema::create('manoafectacion', function (Blueprint $table) {
            $table->increments('id_afectacion');
            $table->integer('id_postulante')->unsigned();
            $table->double('anchomunon');
            $table->double('largomunon');
            $table->double('anchomuneca');
            $table->string('superheroe');
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
        Schema::dropIfExists('manoafectacion');
    }
}