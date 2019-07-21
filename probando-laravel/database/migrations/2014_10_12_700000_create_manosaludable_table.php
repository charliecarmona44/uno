<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManoSaludableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // users in database

    public function up()
    {
        Schema::create('manosaludable', function (Blueprint $table) {
            $table->increments('id_manosaludable');
            $table->integer('id_postulante')->unsigned();
            $table->double('largodedomenique');
            $table->double('largodedoanular');
            $table->double('largodedomedio');
            $table->double('largodedopulgar');
            $table->double('largodorso');
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
        Schema::dropIfExists('manosaludable');
    }
}