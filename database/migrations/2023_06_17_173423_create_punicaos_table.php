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
        Schema::create('punicaos', function (Blueprint $table) {
            $table->id();
            $table->text('descricao');
            $table->unsignedBigInteger('punido_id');
            $table->unsignedBigInteger('ocorrencia_id');
            $table->foreign('punido_id')->references('id')->on('users');
            $table->foreign('ocorrencia_id')->references('id')->on('ocorrencias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punicaos');
    }
};
