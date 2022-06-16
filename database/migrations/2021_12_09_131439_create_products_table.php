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
            $table->increments('id');
            $table->string('id_provider')->nullable();
            $table->string('catalog_number')->nullable();
            $table->string('manufacturer')->nullable();
            $table->integer('quantity')->nullable();
            $table->double('price', 28, 14)->nullable();
            $table->integer('min_order_time')->nullable();
            $table->integer('max_order_time')->nullable();
            $table->double('price_order', 28, 14)->nullable();
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
        Schema::dropIfExists('products');
    }
}
