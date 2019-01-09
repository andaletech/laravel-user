<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name')->index();
            $table->string('middle_name')->nullable();
            $table->string('first_name')->index();
            $table->date('dob')->nullable();
            $table->bigInteger('gender_id', false, true)->nullable();
            $table->string('email')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('is_active')->default(true);
            $table->string('disk')->nullable();
            $table->string('path_to_picture')->nullable();
            $table->string('picture_url')->nullable();
            $table->rememberToken();

            $table->timestamps();
            $table->softDeletes();

            /*
             * Uncomment if needed
             */
            // $table->foreign('gender_id')->references('id')->on('genders');
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
}
