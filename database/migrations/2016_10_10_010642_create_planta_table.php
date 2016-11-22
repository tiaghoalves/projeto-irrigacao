<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planta', function (Blueprint $table) {
            $table->increments('idPlanta');
            $table->integer('idUser')->unsigned();
            $table->string('nome');
            $table->string('apelido');
            $table->text('descricao');
            $table->string('imagem')->default('default.png');
            $table->boolean('status')->default(true);
            $table->foreign('idUser')->references('id')
                                    ->on('users')
                                    ->onDelete('cascade');
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
        Schema::dropIfExists('planta');
    }
}

