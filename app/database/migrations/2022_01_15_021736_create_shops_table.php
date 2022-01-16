<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('description')->nullable(false);
            $table->string('architec_style')->nullable(false);
            $table->string('size')->nullable(false);
            $table->string('kids_area')->nullable(false);
            $table->string('ncorridors')->nullable(false); //numero de pasillos
            $table->bigInteger('ncash_registers')->nullable(false); //numero de cajas
            $table->string('stock_size')->nullable(false);
            $table->date('opening_date')->nullable(false);
            $table->unsignedBigInteger('city_id')->nullable(false);
            $table->foreign('city_id')->references('id')->on('cities');
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
        Schema::dropIfExists('shops');
    }
}
