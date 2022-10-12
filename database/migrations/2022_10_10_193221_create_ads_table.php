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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('ads_name');
            $table->string('ads_title');
            $table->string('ads_url');
            $table->string('ads_price');
            $table->string('ads_banner');
            $table->string('ads_desc');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('ads_deaily_budget')->nullable();
            $table->string('ads_deaily_clicks')->nullable();
            $table->string('ads_referral_code')->nullable();

            $table->string('status')->default('Inactive');
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
};
