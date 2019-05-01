<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutricionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutricions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('id_usuario');
            $table->string('nombre_usuario');

            $table->string('peso');
            $table->string('talla');
            $table->string('diagnostico');
            $table->string('desnutricion');



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
        Schema::dropIfExists('nutricions');
    }
}
