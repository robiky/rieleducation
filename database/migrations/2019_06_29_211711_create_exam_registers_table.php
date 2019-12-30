<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('test_type');
            $table->text('name');
            $table->text('dob');
            $table->string('phone');
            $table->string('email');
            $table->text('street_address');
            $table->text('city');
            $table->text('state');
            $table->integer('zip_code');
            $table->string('gender');
            $table->string('passport_number');
            $table->text('test_date');
            $table->text('test_location');
            $table->string('coaching');
            $table->text('trxref');
            $table->text('_token');
            $table->string('qualification');
            $table->text('field_of_study');
            $table->text('country_of_study');
            $table->text('first_choice');
            $table->text('second_choice');
            $table->integer('payments_id');

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
        Schema::dropIfExists('exam_registers');
    }
}
