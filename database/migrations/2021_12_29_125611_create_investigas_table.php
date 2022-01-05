<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigas', function (Blueprint $table) {
            $table->id();

            $table->string('tema');
            $table->string('area');            
            $table->date('fecha');            
            $table->string('documento')->nullable();            

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
        Schema::dropIfExists('investigas');
    }
}
