<?php

class GamesTableSeeder extends Seeder {

	public function run()
	{
        Game::create([
            'title' => 'Miscue',
            'category' => 'On Course',
            'description' => 'While playing a round of golf, aim for a spot just off the green on your approach shots, such as a bunker or other spot around the green, just make sure not to aim out of bounds. You score a point if you can get up and down from there. Give yourself two points if you are able to chip it in from off the green.',
            'excerpt' => 'While playing a round of golf, aim for a spot just off the green on your approach shots, such as a bunker or other spot around the green, just make sure not to aim out of bounds. You score a point if you can get up and down from there. Give yourself two points if you are able to chip it in from off the green.',
            'slug' => 'miscue'
        ]);

        Game::create([
            'title' => 'Coin Drill',
            'category' => 'Putting',
            'description' => 'Get a breaking putt and place a coin halfway between you and the hole on the high side of the break. Practice putting above and below the coin.',
            'excerpt' => 'Get a breaking putt and place a coin halfway between you and the hole on the high side of the break. Practice putting above and below the coin.',
            'slug' => 'coin-drill'
        ]);

        Game::create([
            'title' => 'Triad',
            'category' => 'Chip/Pitch/Sand',
            'description' => 'Place balls 5, 10, and 15 yards away from three separate holes, and hit a ball to each hole from each location. Finish out by putting each ball into the hole. Your total score is the total amount of strokes to get all 9 balls into the hole.',
            'excerpt' => 'Place balls 5, 10, and 15 yards away from three separate holes, and hit a ball to each hole from each location. Finish out by putting each ball into the hole. Your total score is the total amount of strokes to get all 9 balls into the hole.',
            'slug' => 'triad'
        ]);

        Game::create([
            'title' => 'Siege',
            'category' => 'Putting',
            'description' => 'Grab a partner and stand close to different holes. Make putts to the other players\' hole. If one player makes their putt, both players switch to the other hole. First to 5 made putts is the winner.',
            'excerpt' => 'Grab a partner and stand close to different holes. Make putts to the other players\' hole. If one player makes their putt, both players switch to the other hole. First to 5 made putts is the winner.',
            'slug' => 'siege'
        ]);

        Game::create([
            'title' => 'All or Nothing',
            'category' => 'Putting',
            'description' => 'Practice putting from a short distance away from the hole (3, 4, or 5 feet). Your goal is to make 20 putts in a row without missing. If you miss a putt, you must start over from zero. Once you accomplish this, go for 30 or more putts in a row or move to a further distance from the hole. For added pressure, have others watch you putt your last few shots.',
            'excerpt' => 'Practice putting from a short distance away from the hole (3, 4, or 5 feet). Your goal is to make 20 putts in a row without missing. If you miss a putt, you must start over from zero. Once you accomplish this, go for 30 or more putts in a row or move to a further distance from the hole. For added pressure, have others watch you putt your last few shots.',
            'slug' => 'all-or-nothing'
        ]);

        Game::create([
            'title' => 'Trio',
            'category' => 'Putting',
            'description' => 'Get 9 balls. Place 3 balls around 3 different holes, which are at least 20 feet away from each other. At each hole, putt one of the balls to each hole and finish out with each ball. Keep track of your putts. At the first hole, you should be hitting one putt of five feet and two putts of over 20 feet. At the second hole you should be hitting one putt at 10 feet and two over 20 feet. At the third hole one putt should be from 15 feet and two over 20 feet. Add up your total strokes after finishing all 9 balls to get your score.',
            'excerpt' => 'Get 9 balls. Place 3 balls around 3 different holes, which are at least 20 feet away from each other. At each hole, putt one of the balls to each hole and finish out with each ball. Keep track of your putts. At the first hole, you should be hitting one putt of five feet and two putts of over 20 feet. At the second hole you should be hitting one putt at 10 feet and two over 20 feet. At the third hole one putt should be from 15 feet and two over 20 feet. Add up your total strokes after finishing all 9 balls to get your score.',
            'slug' => 'trio'
        ]);

        Game::create([
            'title' => 'Gate Drill',
            'category' => 'Putting',
            'description' => 'Build a gate around your putter by placing tees in the ground just outside the toe and heel of your putter. Practice making putts while allowing the putter to move through the gate. Try not to hit the tees when you make your putt. Start at about an inch outside your putter and slowly move the tees closer to your putter.',
            'excerpt' => 'Build a gate around your putter by placing tees in the ground just outside the toe and heel of your putter. Practice making putts while allowing the putter to move through the gate. Try not to hit the tees when you make your putt. Start at about an inch outside your putter and slowly move the tees closer to your putter.',
            'slug' => 'gate-drill'
        ]);

        Game::create([
            'title' => 'Traffic Jam',
            'category' => 'Putting',
            'description' => 'Get string and make traffic lanes by laying down lines of string in straight lines. Place the strings parallel to each other so you make several lanes to putt down. Start by making one lane a foot wide, and make each lane narrower and narrower until your last lane is the same size as the golf ball. Go for about 5 or 6 lanes. Make each lane about 15 feet in length.',
            'excerpt' => 'Get string and make traffic lanes by laying down lines of string in straight lines. Place the strings parallel to each other so you make several lanes to putt down. Start by making one lane a foot wide, and make each lane narrower and narrower until your last lane is the same size as the golf ball. Go for about 5 or 6 lanes. Make each lane about 15 feet in length.',
            'slug' => 'traffic-jam'
        ]);

        Game::create([
            'title' => 'Simulated Round',
            'category' => 'Driving Range',
            'description' => 'On the driving range, play a simulated round of golf at your favorite course. Hit the shots you would hit on each hole (for example, if the hole is a long par four, maybe you would hit your driver and then a five iron on your next shot. Make sure you aim for a spot on the driving range and hit to it. Don\'t worry about putting for this game. For scoring, you can keep score as you normally would, giving yourself two putts once you have deemed you are on the virtual green. Another scoring option is to give yourself a score for each shot, one point for a good hit, zero points for a fair hit, and subtract one point for a poor shot.',
            'excerpt' => 'On the driving range, play a simulated round of golf at your favorite course. Hit the shots you would hit on each hole (for example, if the hole is a long par four, maybe you would hit your driver and then a five iron on your next shot. Make sure you aim for a spot on the driving range and hit to it. Don\'t worry about putting for this game. For scoring, you can keep score as you normally would, giving yourself two putts once you have deemed you are on the virtual green. Another scoring option is to give yourself a score for each shot, one point for a good hit, zero points for a fair hit, and subtract one point for a poor shot.',
            'slug' => 'simulated-round'
        ]);

        Game::create([
            'title' => 'Distance Control',
            'category' => 'Driving Range',
            'description' => 'Pick a target and practice hitting shots to it with different clubs. For example, choose a target about 150 yards away. If you would normally go with a 7-iron from this distance, hit your first shot with the 7-iron, then drop down and try to reach it with an 8 or 9-iron, then go up a few clubs and try to get it close with a 5 or 6-iron. Once you do this choose another target and repeat the process.',
            'excerpt' => 'Pick a target and practice hitting shots to it with different clubs. For example, choose a target about 150 yards away. If you would normally go with a 7-iron from this distance, hit your first shot with the 7-iron, then drop down and try to reach it with an 8 or 9-iron, then go up a few clubs and try to get it close with a 5 or 6-iron. Once you do this choose another target and repeat the process.',
            'slug' => 'distance-control'
        ]);

        Game::create([
            'title' => 'Accuracy Control',
            'category' => 'Driving Range',
            'description' => 'The goal of this drill is to work on your accuracy. On the driving range, create an imaginary target at the end of the driving range that is roughly 10 yards wide. Now imagine drawing a 10 yard wide line that extends from you to the target. For this drill, you will hit 2 balls with each club with the object of landing the ball in the target zone. If you land the ball in the zone give yourself a point. You will hit a total of 24 balls. Try to better your score each time you do this drill.',
            'excerpt' => 'The goal of this drill is to work on your accuracy. On the driving range, create an imaginary target at the end of the driving range that is roughly 10 yards wide. Now imagine drawing a 10 yard wide line that extends from you to the target. For this drill, you will hit 2 balls with each club with the object of landing the ball in the target zone. If you land the ball in the zone give yourself a point. You will hit a total of 24 balls. Try to better your score each time you do this drill.',
            'slug' => 'accuracy-control'
        ]);

        Game::create([
            'title' => 'Flag Day',
            'category' => 'Driving Range',
            'description' => 'Hit a single shot to every flag on the range from closest to longest. Give yourself a point for every good shot, meaning a shot that would have hit an imaginary green or fairway.',
            'excerpt' => 'Hit a single shot to every flag on the range from closest to longest. Give yourself a point for every good shot, meaning a shot that would have hit an imaginary green or fairway.',
            'slug' => 'flag-day'
        ]);

        Game::create([
            'title' => '3 by 3',
            'category' => 'Driving Range',
            'description' => 'On the driving range, choose any club in your bag and hit 1 ball with each of 9 different shot shapes. Hit a high draw, straight, and fade shot. Hit a low draw, straight, and fade shot. Finally hit a normal draw, straight, and fade shot. The order does not matter for hitting the shots, just make sure to only hit one ball for each shot shape. A successful shot is one that goes in the intended direction. For these shots use relative shapes and heights, so your low draw must be lower than the medium draw and the high draw. Try to get 9 out of 9 points for this drill.',
            'excerpt' => 'On the driving range, choose any club in your bag and hit 1 ball with each of 9 different shot shapes. Hit a high draw, straight, and fade shot. Hit a low draw, straight, and fade shot. Finally hit a normal draw, straight, and fade shot. The order does not matter for hitting the shots, just make sure to only hit one ball for each shot shape. A successful shot is one that goes in the intended direction. For these shots use relative shapes and heights, so your low draw must be lower than the medium draw and the high draw. Try to get 9 out of 9 points for this drill.',
            'slug' => '3-by-3'
        ]);

        Game::create([
            'title' => 'Musical Chairs',
            'category' => 'Chip/Pitch/Sand',
            'description' => 'At the chipping green, players take turns chipping to any hole they want to. After everybody has hit their shot for that round, figure out who will be knocked out of the game by checking whether or not they are closest to their pin. Golfers can hit to any hole they want to, but to continue on in the game, they must have the closest ball to that hole for that round. For each round, there should be no more holes than 1 less than the total number of players in the round. This makes sure that at least 1 player is knocked out of every round. Players must announce their target hole before they hit their shot. It can get interesting if, for example, the last person could go to an empty hole or choose to try to knock out a better competitor if the better player hit a poor shot in that round. Players must make a decision, do I take the easy way into the next round, or do I try to knock out the best player?',
            'excerpt' => 'At the chipping green, players take turns chipping to any hole they want to. After everybody has hit their shot for that round, figure out who will be knocked out of the game by checking whether or not they are closest to their pin. Golfers can hit to any hole they want to, but to continue on in the game, they must have the closest ball to that hole for that round. For each round, there should be no more holes than 1 less than the total number of players in the round. This makes sure that at least 1 player is knocked out of every round. Players must announce their target hole before they hit their shot. It can get interesting if, for example, the last person could go to an empty hole or choose to try to knock out a better competitor if the better player hit a poor shot in that round. Players must make a decision, do I take the easy way into the next round, or do I try to knock out the best player?',
            'slug' => 'musical-chairs'
        ]);

        Game::create([
            'title' => 'Slam Dunks',
            'category' => 'Chip/Pitch/Sand',
            'description' => 'This game is a fun way to practice your chipping. Take out the tee in a hole and make chip shots at the hole, with the object of landing the ball in the hole on the fly. If you are able to have the ball hit the cup on the fly (whether or not it stays in the cup) move back to a farther shot and attempt to do the same thing again.',
            'excerpt' => 'This game is a fun way to practice your chipping. Take out the tee in a hole and make chip shots at the hole, with the object of landing the ball in the hole on the fly. If you are able to have the ball hit the cup on the fly (whether or not it stays in the cup) move back to a farther shot and attempt to do the same thing again.',
            'slug' => 'slam-dunks'
        ]);
	}

}