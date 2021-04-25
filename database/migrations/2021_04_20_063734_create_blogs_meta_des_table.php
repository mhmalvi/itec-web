<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsMetaDesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs_meta_des', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('action_user')->nullable();
            $table->unsignedBigInteger('blogs_id');
            $table->string('descriptions');
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
        Schema::dropIfExists('blogs_meta_des');
    }
}
