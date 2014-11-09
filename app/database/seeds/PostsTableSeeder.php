<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
        Post::create([
            'content' => 'This is the content for this post.',
            'title' => 'This is an example title.',
            'excerpt' => 'This is an example excerpt.',
            'slug' => 'this-is-an-example-title'
        ]);
        
        Post::create([
            'content' => 'Tiger Woods began making full swings on the golf course near his home in Jupiter, Florida on Monday. Tiger has not played a tournament this year since he had back surgery following the Memorial Tournament in March.',
            'title' => 'Tiger back making full swings.',
            'excerpt' => 'Tiger began making full swings on Monday, a good sign that he may play in the British Open next month.',
            'slug' => 'tiger-back-making-full-swings'
        ]);
        
        Post::create([
            'content' => 'This is our first article written about GolfPOD. This is a test news feature. This is a story about golf news, golfing games or drills, or other stuff about golf.',
            'title' => 'GolfPOD Story',
            'excerpt' => 'This is a short story about golf.',
            'slug' => 'golfpod-story'
        ]);
        
        Post::create([
            'content' => 'The greatest game ever played is a story about a young amateur golfer named Francis Quimet. He won the U.S. open as an amateur at the age of 21. His victory at the 1913 U.S. Open stands as one of the greatest rounds of golf ever played.',
            'title' => 'The Greatest Game Ever Played',
            'excerpt' => 'In 1913 Francis Quimet won the U.S. Open as an amatuer. His accomplishment is known as the greatest game ever played.',
            'slug' => 'the-greatest-game-ever-played'
        ]);
	}

}