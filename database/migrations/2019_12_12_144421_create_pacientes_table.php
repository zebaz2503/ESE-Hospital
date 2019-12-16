<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre_paciente');
            $table->string('cedula');
            $table->string('edad');
            $table->string('eps');
            $table->string('acompanante');
            $table->string('tel');
            $table->string('especialidad');
            $table->string('codigo_cie');
            $table->string('diagnostico');
            $table->string('medico');
            $table->string('nom_familia');
            $table->string('enfermero');
            $table->string('descrip');
            $table->string('fecha');
            $table->string('hora');


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
        Schema::dropIfExists('pacientes');
    }
}
