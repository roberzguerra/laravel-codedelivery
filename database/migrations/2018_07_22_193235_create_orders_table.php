<?php

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
            $table->decimal('total');
            $table->smallInteger('status')->default(0);
            $table->timestamps();

            // Cliente que fez o pedido, relaciona com Client
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users');

            // Usuario que entregou o pedido, relaciona com User
            $table->integer('user_deliveryman_id')->unsigned()->nullable();
            $table->foreign('user_deliveryman_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
