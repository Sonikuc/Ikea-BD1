<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentInstrumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_instruments', function (Blueprint $table) {
            $table->id();
            $table->string('card_number');
            $table->date('expiration_date');
            $table->string('phone_number');
            $table->string('email');
            $table->string('type')->nullable(false); //tarjeta o digital
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
        Schema::dropIfExists('payment_instruments');
    }
}
