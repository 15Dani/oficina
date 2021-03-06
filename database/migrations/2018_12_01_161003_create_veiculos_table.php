<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('veiculos')) {
            Schema::create('veiculos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('modelo');
                $table->string('ano');
                $table->string('placa');
                $table->string('status');
                $table->string('datadesaida');
                $table->string('dataentrada');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
