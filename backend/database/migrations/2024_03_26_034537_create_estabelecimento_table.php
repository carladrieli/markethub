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
        Schema::create('estabelecimento', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('descricao', 255);
            $table->string('endereco', 255);
            $table->timestamps();
            $table->bigInteger('id_categoria_estabelecimentos')->unsigned();
            $table->foreign('id_categoria_estabelecimentos')->references('id')->on('categoria_estabelecimentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estabelecimento');
    }
};
