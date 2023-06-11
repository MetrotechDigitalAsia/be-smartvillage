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
        Schema::create('users_mail', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('user_logins');
            $table->string('mail_id');
            $table->foreign('mail_id')->references('id')->on('mails');
            $table->string('mail_number')->nullable();
            $table->unsignedBigInteger('resident_id');
            $table->json('field')->nullable();
            $table->string('signature')->nullable();
            $table->enum('status',['Pending', 'Process', 'Done', 'Rejected'])->default('Pending');
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
        Schema::dropIfExists('users_mail');
    }
};
