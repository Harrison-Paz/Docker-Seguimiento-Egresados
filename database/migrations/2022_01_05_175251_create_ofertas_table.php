<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();

            $table->string('oferta');
            $table->string('tipo');
            $table->string('ubicacion');
            $table->string('fechaEmicion');
            $table->string('vacantes');
            $table->string('detalle');
            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresas')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::create('egresado_oferta', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('oferta_id')->nullable();
            $table->foreign('oferta_id')->references('id')->on('ofertas')->onDelete('set null')->onUpdate('cascade');

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
        schema::dropIfExists('egresado_oferta');
        Schema::dropIfExists('ofertas');
    }
}
