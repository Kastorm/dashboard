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
        Schema::create('coin__bots', function (Blueprint $table) {
            $table->unsignedBigInteger('bot_id')->nullable();
            $table->unsignedBigInteger('coin_id')->nullable();
            $table->foreign('bot_id')->references('id')->on('bots');
            $table->foreign('coin_id')->references('id')->on('coins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coin__bots');
    }
};
