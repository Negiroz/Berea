<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCelula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celula', function (Blueprint $table) {
            $table->Increments('idCelula');
            $table->string('nombreCelula',10);
            $table->unsignedInteger('distrito_idDistrito');
            $table->foreign('distrito_idDistrito','fk_celula_distrito')->references('idDistrito')->on('distrito')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('celula');
    }
}
