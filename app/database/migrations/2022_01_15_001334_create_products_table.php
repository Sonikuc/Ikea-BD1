<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);  //almacena 256 caracteres
            $table->string('nsueco')->nullable(false);
            $table->boolean('montaje')->nullable(false);
            $table->string('tipo', 4)->nullable(false);
            $table->text('caract')->nullable(false);
            $table->text('instrucc')->nullable(false);
            $table->text('descrip')->nullable(false);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
           $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')
                ->references('id')
                ->on('type_products')
                ->onDelete('set null')
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
        Schema::dropIfExists('products');
    }
}
