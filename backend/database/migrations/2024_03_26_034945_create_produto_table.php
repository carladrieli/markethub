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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->decimal('valor', 9,2);
            $table->timestamps();
            $table->bigInteger('id_categoria_produto')->unsigned();
            $table->foreign('id_categoria_produto')->references('id')->on('categoria_produtos');
            $table->bigInteger('id_estabelecimento')->unsigned();
            $table->foreign('id_estabelecimento')->references('id')->on('estabelecimento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
