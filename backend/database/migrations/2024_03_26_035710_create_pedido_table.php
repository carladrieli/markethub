<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->boolean('solicitado');
            $table->timestamps();
            $table->bigInteger('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('produto');
            $table->bigInteger('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
