<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->id();
            $table->integer('amount')->nullable(false);
            $table->unsignedBigInteger('bill_id')->nullable(false);
            $table->unsignedBigInteger('catalogue_id')->nullable(false);
            $table->foreign('bill_id')
            ->references('id')
            ->on('bills')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('catalogue_id')
            ->references('id')
            ->on('catalogues')
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
        Schema::dropIfExists('bill_details');
    }
}
