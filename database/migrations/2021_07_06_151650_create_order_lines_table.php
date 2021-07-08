<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meal_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedInteger('quantity_ordered');
            $table->double('price_each', 8, 3);
            $table->timestamps();
            $table->foreign('meal_id')->references('id')->on('meals');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_lines');
    }
}
