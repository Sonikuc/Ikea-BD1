<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('month_menus', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->double('price', 15, 8)->nullable(false)->default(123.4567);
            $table->unsignedBigInteger('dish_id')->nullable();
            $table->foreign('dish_id')
                ->references('id')
                ->on('dishes')
                ->onDelete('set null');
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->foreign('shop_id')
                ->references('id')
                ->on('shops');
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
        Schema::dropIfExists('month_menus');
    }
}
