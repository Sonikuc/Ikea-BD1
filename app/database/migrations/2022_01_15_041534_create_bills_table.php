<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->date('issue_date')->nullable(false);
            $table->double('total', 15, 8)->nullable();
            $table->boolean('transport')->nullable()->default(false);
            $table->string('pay_way', 100)->nullable(false);
            $table->unsignedBigInteger('client_id')->nullable(false);
            $table->unsignedBigInteger('cash_register_id')->nullable(false);
            $table->unsignedBigInteger('payment_instrument_id')->nullable(false);
            $table->foreign('payment_instrument_id')
                ->references('id')
                ->on('payment_instruments')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cash_register_id')
                ->references('id')
                ->on('cash_registers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('bills');
    }
}
