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
        Schema::create('webhooks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bot_id')->nullable();
            $table->string('time_frame');
            $table->string('symbol');
            $table->string('side');
            $table->string('action');
            $table->string('bar');
            $table->string('orderId')->nullable();
            $table->string('orderLinkId');
            $table->timestamps();
            $table->foreign('bot_id')->references('id')->on('bots');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webhooks');
    }
};
