<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('correo');
            $table->text('comentario');

            $table->unsignedBigInteger('propiedad_id');
            $table->foreign('propiedad_id','fk_contacto_propiedad')->references('id')->on('propiedads')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('agente_id');
            $table->foreign('agente_id','fk_contacto_agente')->references('id')->on('agentes')->onDelete('restrict')->onUpdate('restrict');

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
        Schema::dropIfExists('contactos');
    }
}
