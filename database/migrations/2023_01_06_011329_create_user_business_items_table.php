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
        Schema::create('user_business_items', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user_logins');
            $table->string('user_phone_number');
            $table->string('item_name');
            $table->unsignedBigInteger('item_category_id');
            $table->foreign('item_category_id')->on('item_business_categories')->references('id');
            $table->string('item_image');
            $table->string('item_price');
            $table->text('item_description');
            $table->string('item_marketplace_link')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('user_business_items');
    }
};
