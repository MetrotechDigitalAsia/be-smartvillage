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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('fullname');
            $table->string('image');
            $table->date('date_of_birth');
            $table->unsignedBigInteger('id_position');
            $table->foreign('id_position')->references('id')->on('positions');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('status');
            $table->string('gender');
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
        Schema::dropIfExists('staff');
    }
};
