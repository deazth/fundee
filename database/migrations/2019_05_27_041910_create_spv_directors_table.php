<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpvDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spv_directors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('spv_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender', 1);
            $table->date('date_of_birth');
            $table->string('social_security_no');
            $table->string('citizenship_country');
            $table->string('language');
            $table->string('passport_no')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('issuing_auth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spv_directors');
    }
}
