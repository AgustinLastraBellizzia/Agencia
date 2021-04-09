<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesPropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes_propiedads', function (Blueprint $table) {
            $table->id();
            $table->text('nombre_archivo');
            $table->timestamps();
            $table->string('extension', 50);
            $table->unsignedBigInteger('propiedad_id');
            $table->foreign('propiedad_id', 'fk_propiedad_imagenes')->references('id')->on('propiedads')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes_propiedads');
    }
}

