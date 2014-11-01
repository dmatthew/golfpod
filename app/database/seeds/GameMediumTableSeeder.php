<?php

class GameMediumTableSeeder extends Seeder {

	public function run()
	{
        for ($i = 1; $i <= 15; $i++) {
            GameMedium::create([
                'game_id' => $i,
                'medium_id' => rand(1, 3)
            ]);
        }
	}

}