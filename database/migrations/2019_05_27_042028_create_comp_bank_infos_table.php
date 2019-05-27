<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompBankInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comp_bank_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('com_reg_id');
            $table->string('bank_name');
            $table->string('street_addr');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postcode');
            $table->string('account_name');
            $table->string('account_no');
            $table->string('sort_code_aba_no')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('account_signatory')->nullable();
            $table->string('bank_officer_1')->nullable();
            $table->string('bank_officer_2')->nullable();
            $table->string('telephone_no');
            $table->string('fax_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comp_bank_infos');
    }
}
