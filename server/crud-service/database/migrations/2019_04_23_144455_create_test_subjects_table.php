<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestSubjectsTable extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
            Schema::create('test_subjects', function (Blueprint $table) {
                  $table->increments('id');

                  $table->integer('test_id');
                  $table->integer('subject_id');
                  $table->integer('marks');


                  $table->integer('created_by');
                  $table->integer('updated_by')->nullable();

                  $table->softDeletes();
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
            Schema::dropIfExists('test_subjects');
      }
}
