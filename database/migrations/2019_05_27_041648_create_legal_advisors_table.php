<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalAdvisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_advisors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('spv_id');
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('street_addr');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postcode');
            $table->string('telephone_no');
            $table->string('fax_no')->nullable();
            $table->string('email_addr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legal_advisors');
    }
}
