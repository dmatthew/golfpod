<?php

/**
 * Post Model
 *
 * @author Matt_Davis
 */
class Post extends Eloquent {
    
    protected $fillable = ['content', 'title', 'excerpt', 'slug'];
    
    public function media()
    {
        return $this->belongsToMany('Medium');
    }
    
    /**
     * Returns a date formatted as Month day, Year.
     * Example: October 12, 2014
     * 
     * @return string
     */
    public function getDate()
    {
        return date("F j, Y", strtotime($this->created_at));
    }
}
