<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameMediumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('game_medium', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('game_id')->unsigned()->index();
			$table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
			$table->integer('medium_id')->unsigned()->index();
			$table->foreign('medium_id')->references('id')->on('media')->onDelete('cascade');
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
		Schema::drop('game_medium');
	}

}
