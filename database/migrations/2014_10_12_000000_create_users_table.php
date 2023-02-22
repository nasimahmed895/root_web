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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('first_name', 127);
            $table->string('last_name', 127);
            $table->string('email')->unique();
            $table->string('user_type', 63);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image', 255)->default('default/profile.png');
            $table->integer('status')->default(1);
            $table->timestamp('last_seen')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};