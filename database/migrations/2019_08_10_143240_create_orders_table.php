<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section');
            $table->string('name')->nullable();
            $table->integer('order');
            $table->integer('display')->default(1);
            $table->integer('line')->default(0);
            $table->integer('line_style')->default(1);
            $table->integer('container_style')->default(1);
            $table->string('menu_name')->nullable();
            $table->integer('menu_display')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
