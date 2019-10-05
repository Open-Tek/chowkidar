<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
            Schema::create('subjects', function (Blueprint $table) {
                  $table->increments('id');

                  $table->string('name');

                  $table->integer('created_by')->default(0);
                  $table->integer('updated_by')->default(0);

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
            Schema::dropIfExists('subjects');
      }
}
