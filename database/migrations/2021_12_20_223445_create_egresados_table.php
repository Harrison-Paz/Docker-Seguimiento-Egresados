<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->id();

            $table -> string('carrera', 25)->default('INGENIERIA DE SISTEMAS');
            $table -> string('direccion', 100);
            $table -> string('celular', 11)->nullable();
            $table -> string('DNI', 8);
            $table -> date('fechaEgreso');
            $table -> smallInteger('numPromocion');
            $table -> smallInteger('puesto');
            $table -> boolean('hasBachiller');
            $table -> boolean('hasTitulo');

            $table -> unsignedBigInteger('user_id')->nullable();
            $table ->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('egresados');
    }
}
