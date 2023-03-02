<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("dueno", 40)->nullable();
            $table->integer("tel" ) ;
            $table->string("mascota");
            $table->integer("edad");
            $table->string("raza");
            $table->string("tratamiento");
            $table->string("cita");
            $table->string("vacunas");
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('citas');
    }
}
