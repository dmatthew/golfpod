<?php

class PodsTableSeeder extends Seeder {

	public function run()
	{
        for ($i = 1; $i <= 10; $i++) {
            Pod::create([
                'pod_date' => date(strtotime("-$i days")),
                'game_id' => $i,
            ]);
        }
	}

}