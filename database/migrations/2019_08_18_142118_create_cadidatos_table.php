<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadidatos', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('vagaid');
			$table->string('nome',255);
			$table->string('email',255);
			$table->string('telefone',255);
			$table->string('apresentacao',2000);
			$table->string('linkedin',255);
			$table->string('github',255);
			$table->string('pretensaosalarial',255);
			$table->string('anexo',255);
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
        Schema::dropIfExists('cadidatos');
    }
}
