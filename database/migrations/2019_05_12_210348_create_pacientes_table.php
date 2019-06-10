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
            $table->increments('PacienteId');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->date('FechaNacimiento');
            $table->string('Telefono');
            $table->float('Peso');
            $table->float('Altura');
            $table->string('TipoSangre');
            $table->string('Operaciones');
            $table->string('Sexo');
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
