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
     * Returns a list of POD's from the given year and month.
     * @param string $year
     * @param string $month
     * @return Object
     */
    public function fromMonth($year = null, $month = null)
    {
        $startDate = new DateTime();
        $endDate = new DateTime();
        if ( ! $year || ! $month) {
            $startDate->modify('first day of this month');
            $endDate->modify('first day of next month');
        }
        else {
            $startDate->setDate($year, $month, "1");
            $endDate->setDate($startDate->format('Y'), $startDate->format('m') + 1, '1');
        }
        
        $pods = Pod::whereBetween('pod_date', array($startDate, $endDate))->get();
        if ($pods->isEmpty()) {
            Redirect::to('practice-of-the-day');
        }
        
        return $pods;
    }
    
    
    public function pagerLinks($year, $month)
    {
        $startDate = new DateTime();
        $endDate = new DateTime();
        if ( ! $year || ! $month) {
            $startDate->modify('first day of this month');
            $endDate->modify('first day of next month');
        }
        else {
            $startDate->setDate($year, $month, "1");
            $endDate->setDate($startDate->format('Y'), $startDate->format('m') + 1, '1');
        }
        
        $prevPods = Pod::where('pod_date', '<', $startDate)->get();
        $nextPods = Pod::where('pod_date', '>=', $endDate)->get();
        
        $pagerLinks = array('prev' => null, 'next' => null);
        if ( ! $prevPods->isEmpty()) {
            $pagerLinks['prev'] = array('year' => $startDate->format('Y'), 'month' => $startDate->format('m') - 1);
        }
        if ( ! $nextPods->isEmpty()) {
            $pagerLinks['next'] = array('year' => $endDate->format('Y'), 'month' => $endDate->format('m'));
        }
        
        return $pagerLinks;
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
