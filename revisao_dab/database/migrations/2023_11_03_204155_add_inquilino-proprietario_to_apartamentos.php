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
        Schema::table('apartamentos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_morador')->unique()->nullable();
            $table->unsignedBigInteger('user_proprietario')->nullable();
            $table->foreign('user_morador')->references('id')->on('users');
            $table->foreign('user_proprietario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apartamentos', function (Blueprint $table) {
            $table->dropColumn('user_morador');
            $table->dropColumn('user_proprietario');
        });
    }
};
