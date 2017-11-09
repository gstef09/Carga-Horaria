<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableDocentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function(Blueprint $table){
            $table->increments('id');
            $table->string('abreviatura');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('identificacion')->unique();
            $table->enum('tipo_identificacion',['Cédula','RUC','Pasaporte']);
            $table->string('email_personal')->nullable();
            $table->string('email_institucional');
            $table->string('celular');
            $table->string('telefono')->nullable();
            $table->string('nacionalidad');
            $table->string('residencia');
            $table->string('direccion');
            $table->enum('tipo_contrato',['Tiempo_Completo','Medio_Tiempo']);
            $table->enum('estado',['Contratado','Culminado','Renovado']);
            $table->integer('facultad_id')->unsigned();
            $table->timestamps();
            $table->foreign('facultad_id')->references('id')->on('facultades');

        });
            

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
