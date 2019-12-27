<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAsistencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia', function (Blueprint $table) {
            $table->Increments('idAsistencia');
            $table->unsignedInteger('evento_idEvento');
            $table->foreign('evento_idEvento','fk_asistencia_evento')->references('idEvento')->on('evento')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('persona_idPersona');
            $table->foreign('persona_idPersona','fk_asistencia_persona')->references('idPersona')->on('persona')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('asistencia');
    }
}
