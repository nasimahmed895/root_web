<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->string('location', 100)->nullable();
            $table->string('vacancy', 50)->nullable();
            $table->string('date', 50)->nullable();
            $table->string('work_level', 100)->nullable();
            $table->string('experience', 100)->nullable();
            $table->string('job_time')->nullable();
            $table->string('salary', 100)->nullable();
            $table->longText('overview')->nullable();
            $table->longText('requirement')->nullable();
            $table->longText('job_requirement')->nullable();
            $table->longText('benefits')->nullable();
            $table->longText('note')->nullable();
            $table->longtext('slug')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('careers');
    }
};
