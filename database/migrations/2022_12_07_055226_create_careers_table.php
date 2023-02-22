<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('title')->nullable();
            $table->string('company_name', 100)->nullable();
            $table->string('location', 100)->nullable();
            $table->string('vacancy', 50)->nullable();
            $table->string('date', 50)->nullable();
            $table->string('address', 192)->nullable();
            $table->string('work_level', 100)->nullable();
            $table->string('experience', 100)->nullable();
            $table->string('job_time')->nullable();
            $table->string('salary', 100)->nullable();
            $table->longText('overview')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('overview_list')->nullable();
            $table->string('slug')->nullable();
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