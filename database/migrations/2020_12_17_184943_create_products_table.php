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
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('family');
            $table->text('diameter')->nullable();
            $table->text('height')->nullable();
            $table->text('advantage')->nullable();
            $table->text('level')->nullable();
            $table->boolean('pet_friendly')->nullable();
            $table->string('sun')->nullable();
            $table->integer('price');
            $table->string('image')->nullable();
            $table->string('size');
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
