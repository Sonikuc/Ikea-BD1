<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnualPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_payments', function (Blueprint $table) {
            $table->date('year')->primary();
            $table->unsignedBigInteger('affiliated_client_id')->nullable(false);
            $table->foreign('affiliated_client_id')->references('id')->on('affiliated_clients')->onDelete('cascade');
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
        Schema::dropIfExists('annual_payments');
    }
}
