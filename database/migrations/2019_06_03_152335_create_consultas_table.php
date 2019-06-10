<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('ConsultaId');
            $table->text('Sintomas');
            $table->text('Observaciones');
            $table->integer('MedicoId')->unsigned();
            $table->integer('PacienteId')->unsigned();
            $table->boolean('Estado');

            $table->foreign('MedicoId')->references('MedicoId')->on('medicos');
            $table->foreign('PacienteId')->references('PacienteId')->on('pacientes');

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
        Schema::dropIfExists('consultas');
    }
}
