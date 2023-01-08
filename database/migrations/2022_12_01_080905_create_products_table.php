<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nosaukums');
            $table->string('cena');
            $table->string('kategorija');
            $table->text('apraksts');
            $table->string('galerija');
            $table->foreignId('autora_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produkt');
    }
}
