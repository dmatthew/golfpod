<?php

/**
 * Post Model
 *
 * @author Matt_Davis
 */
class Post extends Eloquent {
    
    protected $fillable = ['content', 'title', 'excerpt', 'published_date', 'slug'];
    
    public static $rules = array(
        'title' => 'required',
        'published_date' => 'required',
        'content' => 'required'
    );
    
    public $errors;
    
    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);

        if ($validation->passes())
        {
            return true;
        }

        $this->errors = $validation->messages();
        return false;
    }
    
    public function media()
    {
        return $this->belongsToMany('Medium', 'post_medium');
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
