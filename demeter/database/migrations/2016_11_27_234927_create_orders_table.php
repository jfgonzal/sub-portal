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
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->enum('location', ['second_floor', 'first_floor']);
            $table->enum('status', ['pending', 'progress', 'complete'])->default('pending');
            $table->string('bread')->nullable();
            $table->string('condiment')->nullable();
            $table->string('cheese')->nullable();
            $table->string('meat')->nullable();
            $table->string('soup')->nullable();
            $table->string('chip_cookie')->nullable();
            $table->string('drink')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
