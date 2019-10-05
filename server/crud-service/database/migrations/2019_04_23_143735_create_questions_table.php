<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');

            $table->text('statement');
            $table->integer('chapter_id');
            $table->integer('marks');
            $table->integer('difficulty_id');
            $table->integer('negative_marks')->default(0);
            $table->double('selection_probability')->default(0);
            $table->double('attempt_probability')->default(0);
            $table->enum('type', ['mcq', 'fib', 'mtf', 'tof']);

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
        Schema::dropIfExists('questions');
    }
}
