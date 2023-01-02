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
        Schema::create('destination_points', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->json('image')->nullable();
            $table->string('category');
            $table->text('address');
            $table->text('description')->nullable();
            $table->string('lat');
            $table->string('long');
            $table->unsignedBigInteger('status');
            $table->string('phone')->nullable();
            $table->boolean('priority');
            $table->string('website')->nullable();
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
        Schema::dropIfExists('destination_points');
    }
};
