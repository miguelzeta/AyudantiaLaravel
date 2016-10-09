<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sucursales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {

            $table->increments('IdentificadorSucursal');
            $table->integer('IdentificadorClinica')->unsigned();
            $table->string('NombreSucursal');
            $table->string('DireccionSucursal');


            $table->foreign('IdentificadorClinica')->references('IdentificadorClinica')->on('clinicas')->onDelete('cascade');

            $table->rememberToken();
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
        //
    }
}
