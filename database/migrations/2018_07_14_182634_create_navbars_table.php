<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavbarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nav_item1')->nullable();
            $table->string('nav_item2')->nullable();
            $table->string('nav_item3')->nullable();
            $table->string('nav_item4')->nullable();
            $table->string('nav_item5')->nullable();
            $table->string('top_navbar_bg_color')->nullable();
            $table->string('bottom_navbar_bg_color')->nullable();
            $table->string('top_text_color')->nullable();
            $table->string('bottom_text_color')->nullable();
            $table->string('hover_color')->nullable();
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
        Schema::dropIfExists('navbars');
    }
}
