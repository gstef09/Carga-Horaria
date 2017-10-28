<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCiclos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos',function(Blueprint $table){
            $table->increments('id');
            $table->integer('año');
            $table->enum('periodo',['Periodo_1','Periodo_2']);
            $table->enum('estado',['Cerrado','Vigente']);
            $table->date('fecha_inicio');
            $table->date('fecha_final');
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
        Schema::dropIfExists('ciclos');
    }
}
