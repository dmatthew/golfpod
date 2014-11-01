<?php

/**
 * Game Model
 *
 * @author Matt_Davis
 */
class Game extends Eloquent {
    
    protected $fillable = ['title', 'category', 'description', 'excerpt', 'slug'];
    
    public function media()
    {
        return $this->belongsToMany('Medium');
    }
}
