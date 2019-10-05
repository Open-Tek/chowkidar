<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
              $table->increments('id');

              $table->integer('user_id');
              $table->string('refresh_token')->default("");
              $table->bigInteger('refresh_token_expiry')->default(0);

              $table->string('access_token')->default("");
              $table->bigInteger('access_token_expiry')->default(0);
              $table->tinyInteger('deleted')->default(0);
              $table->integer('created_by')->default(0);
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
        Schema::dropIfExists('tokens');
    }
}
