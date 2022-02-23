<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsPublishedColumnToCourseIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_industries', function (Blueprint $table) {
            $table->addColumn("boolean", "is_published", [
                'default' => false,
                'after' => 'thumbnail'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_industries', function (Blueprint $table) {
            $table->dropColumn("is_published");
        });
    }
}
