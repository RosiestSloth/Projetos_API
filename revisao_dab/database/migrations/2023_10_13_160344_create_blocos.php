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
        Schema::create('blocos', function (Blueprint $table) {
            $table->id();
            $table->string('bloco');
            $table->string('descricao')->nullable();
            $table->unsignedBigInteger('condominio_id');
            $table->timestamps();

            $table->foreign('condominio_id')->references('id')->on('condominios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocos');
    }
};
