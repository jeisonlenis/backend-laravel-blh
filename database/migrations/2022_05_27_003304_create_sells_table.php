<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendedor_id');
            $table->foreign('vendedor_id')
                ->references('id')
                ->on('sellers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('auto_id');
            $table->foreign('auto_id')
                ->references('id')
                ->on('cars')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('modelo');
            $table->string('anio');
            $table->string('valor');
            $table->string('cliente');
            $table->string('vendedor');
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
        Schema::dropIfExists('sells');
    }
}
