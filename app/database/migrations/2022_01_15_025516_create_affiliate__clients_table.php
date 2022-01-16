<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliated_clients', function (Blueprint $table) {
            $table->id();
            $table->integer('discount')->nullable(false);
            $table->integer('payment')->nullable(false);
            $table->date('membership_date')->nullable(false);
            $table->unsignedBigInteger('client_id')->nullable(false);
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
        Schema::dropIfExists('affiliate_clients');
    }
}
