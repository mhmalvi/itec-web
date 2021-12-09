<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRplEligibilityRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpl_eligibility_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('industry');
            $table->string('qualification');
            $table->string('work_experience');
            $table->string('work_location');
            $table->string('living_state');
            $table->enum('qus1', ['yes', 'no']);
            $table->enum('qus2', ['yes', 'no']);
            $table->enum('qus3', ['yes', 'no']);
            $table->enum('qus4', ['yes', 'no']);
            $table->enum('qus5', ['yes', 'no']);
            $table->longText('remark')->nullable();
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
        Schema::dropIfExists('rpl_eligibility_requests');
    }
}
