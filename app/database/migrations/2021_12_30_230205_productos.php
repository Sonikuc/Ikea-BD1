<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);  //almacena 256 caracteres
            $table->string('nsueco')->nullable(false);
            $table->boolean('montaje')->nullable(false);
            $table->string('tipo', 4)->nullable(false);
            $table->text('caract')->nullable(false);
            $table->text('instrucc')->nullable(false);
            $table->text('descrip')->nullable(false);
            $table->timestamps(); //created at - update at
        });

       // DB::statement('ALTER TABLE productos ADD CONSTRAINT chk_tipo CHECK (tipo in ('sim','com'));');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
