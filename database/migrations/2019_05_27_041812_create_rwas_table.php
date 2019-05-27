<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRwasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rwas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('com_reg_id');
            $table->integer('spv_id');
            $table->string('project');
            $table->string('sector');
            $table->string('gdv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rwas');
    }
}
