<?php

/**
 * Pod Model
 *
 * @author Matt_Davis
 */
class Pod extends Eloquent {
    
    const CREATED_AT = 'pod_date';
    
    public $timestamps = false;
    
    protected $fillable = ['pod_game', 'pod_date'];
    
    public function game()
    {
        return $this->belongsTo('Game');
    }
    
    /**
     * Returns a date formatted as Month day, Year.
     * Example: October 12, 2014
     * 
     * @return string
     */
    public function getDate()
    {
        return date("F j, Y", strtotime($this->pod_date));
    }
}
