<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_marks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('option_id');
            $table->integer('marks');
            $table->dateTime('wef');

            $table->integer('created_by');
            $table->integer('updated_by');
            $table->tinyInteger('deleted')->default(0);

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
        Schema::dropIfExists('option_marks');
    }
}
