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
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string('symbol')->nullable()->unique();
            $table->string('contractType');
            $table->string('status');
            $table->string('baseCoin');
            $table->string('quoteCoin');
            $table->string('launchTime');
            $table->string('deliveryTime');
            $table->string('deliveryFeeRate');
            $table->integer('priceScale');
            $table->string('leverage')->default('10');
            $table->float('minLeverage');
            $table->float('maxLeverage');
            $table->float('leverageStep');
            $table->float('minPrice');
            $table->integer('maxPrice');
            $table->float('tickSize');
            $table->integer('maxOrderQty');
            $table->integer('minOrderQty');
            $table->integer('qtyStep');
            $table->integer('postOnlyMaxOrderQty');
            $table->string('unifiedMarginTrade');
            $table->integer('fundingInterval');
            $table->string('settleCoin');
            $table->string('copyTrading');
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
        Schema::dropIfExists('coins');
    }
};
