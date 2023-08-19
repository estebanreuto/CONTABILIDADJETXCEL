<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Caja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Caja', function (Blueprint $table) {
            $table->id();
            $table->string('Descripcion');
            $table->string('Estado');
            $table->bigInteger('id_empresa')->unsigned();
            $table->string();
            $table->foreign('id_empresa')->references('id')->on('empresas')->onDelete('cascade');
    
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
