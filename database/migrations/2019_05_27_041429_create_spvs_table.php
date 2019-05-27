<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('spv_reg_no');
            $table->string('rwa_id')->nullable();
            $table->string('spv_name');
            $table->date('inc_date')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('bod')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spvs');
    }
}
