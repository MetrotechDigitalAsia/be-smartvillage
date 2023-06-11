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
        Schema::create('saksi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('position');
            $table->string('kk');
            $table->string('nik');
            $table->string('age');
            $table->string('job');
            $table->string('address');
            $table->string('citizenship');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saksi');
    }
};