<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComPersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_personnels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('com_reg_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender', 1);
            $table->string('role');
            $table->date('date_of_birth');
            $table->string('social_security_no');
            $table->string('citizenship_country');
            $table->string('language');
            $table->string('passport_no')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('issuing_auth')->nullable();
            $table->string('remark')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('com_personnels');
    }
}
