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
            $table->string('Title')->nullable();
            $table->string('Faculty_Involved')->nullable();
            $table->string('Researchers')->nullable();
            $table->string('Abstract')->nullable();
            $table->timestamps('Date_Sub')->nullable();

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
