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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bot_id')->nullable();
            $table->unsignedBigInteger('webhook_id')->nullable();
            $table->string('time_frame');
            $table->string('action');
            $table->string('symbol');
            $table->string('side');
            $table->string('size');
            $table->string('avgPrice');
            $table->string('pnl');
            $table->string('orderId');
            $table->string('orderLinkId');
            $table->foreign('bot_id')->references('id')->on('bots');
            $table->foreign('webhook_id')->references('id')->on('webhooks');
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
        Schema::dropIfExists('orders');
    }
};
