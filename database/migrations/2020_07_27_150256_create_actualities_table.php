<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualities', function (Blueprint $table) {
            $table->increments('idActualities');
            $table->string('titre');
            $table->string('description');
            $table->string('image');
            $table->date('publication');
            $table->integer('idcategorie')->length(10)->unsigned();
            $table->foreign('idcategorie')->references('idcategorie')->on('categorie');
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
        Schema::dropIfExists('actualities');
    }
}
