<?php

/**
 * Game Model
 *
 * @author Matt_Davis
 */
class Game extends Eloquent {
    
    protected $fillable = ['title', 'category', 'description', 'excerpt', 'slug'];
    
    public static $rules = array(
        'title' => 'required',
        'category' => 'required',
        'description' => 'required'
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
        return $this->belongsToMany('Medium');
    }
}
