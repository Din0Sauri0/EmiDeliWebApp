<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_pedido', 100);
            $table->string('title', 45); //! OJO: Esto corresponde al nombre del cliente 
            $table->integer('abono');
            $table->date('start');
            $table->date('end');
            $table->string('imagen')->nullable();
            $table->integer('total');
            $table->text('descripcion');

            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes');

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
        Schema::dropIfExists('pedidos');
    }
};
