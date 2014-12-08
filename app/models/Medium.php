<?php

/**
 * Medium Model
 *
 * @author Matt_Davis
 */
class Medium extends \Eloquent {

	protected $fillable = ['path', 'label', 'type'];
    
    public function games()
    {
        return $this->belongsToMany('Game');
    }
    
    public function posts()
    {
        return $this->belongsToMany('Post', 'post_medium');
    }
}