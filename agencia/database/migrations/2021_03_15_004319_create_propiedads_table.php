<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->text('descripcion');
            $table->double('precio', 10,2);
            $table->text('localizacion');
            $table->string('area', 50);
            $table->smallInteger('cuartos');
            $table->smallInteger('banios');
            $table->smallInteger('garages');
            $table->text('slug');
            $table->bigInteger('categoria_id');
            //$table->foreign('categoria_id',  'fk_propiedad_categoria')->references('id')->on()


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
        Schema::dropIfExists('propiedads');
    }
}
