<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('ad_id');
            $table->unsignedBigInteger('user_id');
            $table->string('ad_title1');
            $table->string('ad_link1');
            $table->string('ad_title2');
            $table->string('ad_link2');
            $table->string('ad_title3');
            $table->string('ad_link3');
            $table->string('ad_title4');
            $table->string('ad_link4');
            $table->string('ads_1');
            $table->string('ads_2');
            $table->string('ads_3');
            $table->string('ads_4');
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
        Schema::dropIfExists('ads');
    }
}
