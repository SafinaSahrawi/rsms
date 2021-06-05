<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentbankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentbank', function (Blueprint $table) {
            $table->increments('paymentbank_id');
            $table->string('Username');
            $table->string('Password');
            $table->integer('CardNumber');
            $table->integer('TAC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paymentbank');
    }
}
