<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('anuncioid');
			$table->string('nome',255)->nullable();
			$table->string('email',255)->nullable();
			$table->string('telefone',255)->nullable();
			$table->string('apresentacao',2000)->nullable();
			$table->string('linkedin',255)->nullable();
			$table->string('github',255)->nullable();
			$table->string('pretensaosalarial',255)->nullable();
			$table->string('anexo',255)->nullable();
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
        Schema::dropIfExists('candidatos');
    }
}
