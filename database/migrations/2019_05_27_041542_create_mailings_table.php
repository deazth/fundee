<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('com_reg_id');
            $table->string('street_addr');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postcode');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mailings');
    }
}
