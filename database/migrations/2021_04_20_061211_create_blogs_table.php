<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('action_user')->unsigned()->nullable();
            $table->foreign('action_user')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('blog_categories_id')->unsigned()->nullable();
            $table->foreign('blog_categories_id')->on('blog_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('blog_title');
            $table->string('blog_slug')->nullable();
            $table->longText('blog_des');
            $table->text('meta_des')->nullable();
            $table->string('meta_tags')->nullable();
            $table->string('meta_keys')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('image')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->string('image_alt')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
