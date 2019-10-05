<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
            Schema::create('teachers', function (Blueprint $table) {
                  $table->increments('id');

                  $table->integer('user_id');

                  $table->integer('created_by')->default(0);
                  $table->integer('updated_by')->default(0);
                  $table->tinyInteger('deleted')->default(0);

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
            Schema::dropIfExists('teachers');
      }
}
