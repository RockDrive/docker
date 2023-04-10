<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbpTradingOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibp_trading_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ibp_product_id');
            $table->unsignedBigInteger('ibp_version_id');
            $table->json('media')->nullable();
            $table->unsignedDouble('price')->default(0);
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
        Schema::dropIfExists('ibp_trading_options');
    }
}
