<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBsitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bsits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('Faculty_Involved');
            $table->string('Researchers');
            $table->string('Abstract');
            $table->timestamps('Date_Sub');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bsits');
    }
}