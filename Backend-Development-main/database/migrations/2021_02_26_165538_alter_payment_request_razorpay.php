<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPaymentRequestRazorpay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_requests', function (Blueprint $table) {
            \DB::statement("ALTER TABLE user_requests CHANGE payment_mode payment_mode ENUM('CASH','CARD','PAYPAL','CC_AVENUE','razorpay')");

        });

        Schema::table('users', function (Blueprint $table) {
            \DB::statement("ALTER TABLE users CHANGE payment_mode payment_mode ENUM('CASH','CARD','PAYPAL','CC_AVENUE','razorpay')");
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_requests', function (Blueprint $table) {
            //
        });
    }
}
