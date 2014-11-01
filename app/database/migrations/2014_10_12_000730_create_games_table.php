<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 70)->unique();
            $table->enum('category', array('putting', 'chip-pitch-sand', 'driving-range', 'on-course'));
            $table->text('description');
            $table->text('excerpt');
            $table->string('slug', 70)->unique();
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
        Schema::drop('games');
    }

}
