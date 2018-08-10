<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('profile_image')->default('uploads/profile_image/avatar.jfif');
            $table->string('institute')->nullable();
            $table->string('alumni')->nullable();
            $table->string('department')->nullable();
            $table->string('last_score')->nullable();
            $table->string('hs_score')->nullable();
            $table->string('hslc_score')->nullable();
            $table->string('phone')->nullable();
            $table->string('about')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
