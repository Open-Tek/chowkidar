<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_subjects', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('enrollment_id');
            $table->integer('subject_id');

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
        Schema::dropIfExists('enrollment_subjects');
    }
}
