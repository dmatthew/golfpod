<?php

class PODController extends BaseController {
    
    protected $game;
    
    /**
     * 
     * @param Pod $pod
     */
    public function __construct(Pod $pod)
    {
        $this->pod = $pod;
    }

    /**
     * Display all POD's for the given month.
     * 
     * @return Response
     */
    public function index($year = null, $month = null)
    {   
        $startDate = new DateTime($this->pod->orderBy('pod_date', 'asc')->first()->pod_date);
        $endDate = new DateTime($this->pod->orderBy('pod_date', 'desc')->first()->pod_date);
        $interval = new DateInterval('P1M');
        $dateRange = new DatePeriod($startDate, $interval, $endDate);
        $dates = array();
        foreach ($dateRange as $myDate) {
            $dates[] = $myDate;
        }
        $dates = array_reverse($dates);
        
        $pods = $this->pod->fromMonth($year, $month);
        $pagerLinks = $this->pod->pagerLinks($year, $month);
        
        return View::make('pods/index', ['pods' => $pods, 'dates' => $dates, 'pagerLinks' => $pagerLinks]);
    }

}
