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
            $table->unsignedBigInteger('open_webh_id')->nullable();
            $table->unsignedBigInteger('close_webh_id')->nullable();
            $table->boolean('status')->default('1');
            $table->string('symbol');
            $table->string('time_frame');
            $table->string('action');
            $table->string('side');
            $table->string('category');
            $table->string('size');
            $table->string('openPrice');
            $table->string('markPrice');
            $table->string('closePrice')->nullable();
            $table->string('pnl')->nullable();
            $table->string('tp')->nullable();
            $table->string('sl')->nullable();
            $table->string('tsl')->nullable();
            $table->string('atsl')->nullable();
            $table->string('liqPrice');
            $table->string('positionValue');
            $table->string('positionIM');
            $table->string('orderId');
            $table->string('orderLinkId');
            $table->foreign('bot_id')->references('id')->on('bots');
            $table->foreign('open_webh_id')->references('id')->on('webhooks');
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
