<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReconocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reconocimientos', function (Blueprint $table) {
            $table->id();

            $table->string('tipo');
            $table->string('area');
            $table->string('institucion');
            $table->string('representante');
            $table->string('detalle')->nullable();
            $table->date('fecha');
            $table->string('direccion');

            $table->unsignedBigInteger('egresado_id')->nullable();
            $table->foreign('egresado_id')->references('id')->on('egresados')->onDelete('set null')->onUpdate('cascade');

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
        Schema::dropIfExists('reconocimientos');
    }
}
