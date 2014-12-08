<?php

/**
 * PostMedium Model
 *
 * @author Matt_Davis
 */
class PostMedium extends \Eloquent {
    
    protected $table = 'post_medium';

	protected $fillable = ['post_id', 'medium_id'];

}