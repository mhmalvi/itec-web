<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('action_user')->nullable();
            $table->unsignedBigInteger('course_industries_id')->nullable();
            $table->unsignedBigInteger('course_categories_id')->nullable();
            $table->string('course_code');
            $table->string('course_name');
            $table->text('course_desc')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('checklist')->nullable();
            $table->boolean('isPublished')->default(0);
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
        Schema::dropIfExists('courses');
    }
}
