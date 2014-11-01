<?php

class MediaTableSeeder extends Seeder {

	public function run()
	{
        Medium::create([
            'path' => 'stock01.jpg',
            'label' => 'Stock Photo 1',
            'type' => 'image'
        ]);

        Medium::create([
            'path' => 'stock02.jpg',
            'label' => 'Stock Photo 2',
            'type' => 'image'
        ]);

        Medium::create([
            'path' => 'stock03.jpg',
            'label' => 'Stock Photo 3',
            'type' => 'image'
        ]);
	}

}