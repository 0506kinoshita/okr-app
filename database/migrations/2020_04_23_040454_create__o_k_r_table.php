<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOKRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_o_k_r', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('objective');
            $table->string('key_result');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('class_number');
            $table->boolean('master_flag')->default(1);
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
        Schema::dropIfExists('_o_k_r');
    }
}
