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
        Schema::create('mail_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_mail_id');
            $table->foreign('users_mail_id')->references('id')->on('users_mail')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_files');
    }
};
