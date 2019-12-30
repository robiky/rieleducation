<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book');
            $table->string('first_name');
            $table->text('phone');
            $table->text('email');
            $table->text('date')->nullable();
            $table->text('trxref');
            $table->text('action')->nullable();
            $table->string('amount')->nullable();
            $table->text('address');
            $table->integer('payment_status')->nullable();
            $table->string('quantity');
            $table->string('courier_choice')->nullable();
            $table->string('courier')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
