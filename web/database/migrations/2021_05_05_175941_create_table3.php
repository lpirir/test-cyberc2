<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table3', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('qty_sale');
            $table->integer('number_week');
            $table->foreignId('table1_id')->constrained('table1');
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
        Schema::dropIfExists('table3');
    }
}
