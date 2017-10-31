<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_materia');
            $table->string('materia');
            $table->enum('nivel',['Primero','Segundo', 'Tercero','Cuarto','Quinto','Sexto','Séptimo','Octavo','Noveno'.'Décimo']);
            $table->integer('creditos');
            $table->enum('tipo_materia',['Formación_Básica','Formación_Humana','Seminarios_Curriculres','Formación_Profesional']);
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
        Schema::dropIfExists('materias');
    }
}
