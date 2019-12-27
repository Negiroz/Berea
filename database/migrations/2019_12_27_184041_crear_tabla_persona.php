<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->Increments('idPersona');
            $table->string('nombre',50);
            $table->string('cedula',15);
            $table->string('sexo',1);
            $table->string('direccion',150);
            $table->string('telefono',15)->nullable();
            $table->date('fechaNacimiento');
            $table->unsignedInteger('rol_idrol');
            $table->foreign('rol_idrol','fk_persona_rol')->references('idrol')->on('rol')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('persona');
    }
}
