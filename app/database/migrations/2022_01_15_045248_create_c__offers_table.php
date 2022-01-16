<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_offers', function (Blueprint $table) {
            $table->unsignedBigInteger('catalogue_id')->nullable(false);
            $table->foreign('catalogue_id')
            ->references('id')
            ->on('catalogues')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('offer_id')->nullable(false);
            $table->foreign('offer_id')
            ->references('id')
            ->on('offers')
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
        Schema::dropIfExists('c_offers');
    }
}
