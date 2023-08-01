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
        Schema::create('bot', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('category')->default('linear');
            $table->boolean('status')->default(false);
            $table->string('leverage')->default('25');
            $table->string('order_size');
            $table->string('order_tp');
            $table->string('order_sl');
            $table->string('order_tsl');
            $table->string('order_activ_tsl');
            $table->string('balans_min');
            $table->boolean('testnet')->default(false);
            $table->string('api_key')->nullable();
            $table->string('api_secret')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bot');
    }
};
