<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);  //almacena 256 caracteres
            $table->string('last_name')->nullable(false);
            $table->date('date_of_birth')->nullable(false);
            $table->char('gender',1)->nullable(false);
            $table->unsignedBigInteger('client_id')->nullable(false);
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps(); //created at - update at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sons');
    }
}
