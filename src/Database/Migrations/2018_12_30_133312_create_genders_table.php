<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration for the genders table.
 * 
 * @author Kolado Sidibe <kolado.sidibe>
 * @copyright 2018 Andale Technologies, SARL.
 * @license MIT
 * @package andaletech\laravel-user
 */
class CreateGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50)->unique();
            $table->string('display_name', 100)->unique();
            // $table->string('display_name_fr', 100)->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genders');
    }
}
