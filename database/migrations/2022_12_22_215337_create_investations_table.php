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
        Schema::create('investations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('fullname');
            $table->string('institute_name');
            $table->string('institute_address');
            $table->unsignedBigInteger('investation_category_id');
            $table->foreign('investation_category_id')->references('id')->on('investation_categories');
            $table->string('institute_email');
            $table->string('institute_phone_number');
            $table->text('institute_description');
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
        Schema::dropIfExists('investations');
    }
};
