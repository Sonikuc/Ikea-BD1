<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('UID')->nullable(false); //cedula ps
            $table->string('name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->string('middle_name')->nullable(false);
            $table->string('second_last_name')->nullable(false);
            $table->date('date_of_birth')->nullable(false);
            $table->char('gender',1)->nullable(false);
            $table->char('email',50);
            $table->unsignedBigInteger('city_id')->nullable(false);
            $table->foreign('city_id')
                ->references('id')
                ->on('cities');

            $table->unsignedBigInteger('role_id')->nullable(false);
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
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
        Schema::dropIfExists('clients');
    }
}
