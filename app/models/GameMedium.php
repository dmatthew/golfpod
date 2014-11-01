<?php

/**
 * GameMedium Model
 *
 * @author Matt_Davis
 */
class GameMedium extends \Eloquent {
    
    protected $table = 'game_medium';

	protected $fillable = ['game_id', 'medium_id'];

}