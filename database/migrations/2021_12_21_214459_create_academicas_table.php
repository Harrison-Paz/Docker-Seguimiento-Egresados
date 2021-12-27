<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('empresa', 100);
            $table->string('direccion', 100);
            $table->string('representante', 50);
            $table->smallInteger('totalHoras');
            $table->boolean('isCertificado');
            $table->string('observacion')->nullable();
            $table->string('imagen')->nullable();

            $table->unsignedBigInteger('egresado_id');
            $table->foreign('egresado_id')->references('id')->on('egresados')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('academicas');
    }
}
