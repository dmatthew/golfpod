<?php namespace Admin;

use Illuminate\Support\Facades\View;
use Pod;

class PODController extends \BaseController {

	protected $pod;
    
    /**
     * 
     * @param Pod $pod
     */
    public function __construct(Pod $pod)
    {
        $this->pod = $pod;
    }

	/**
	 * Display a list of pods.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get a list of pods.
        $pods = $this->pod->paginate(30);
        
        return View::make('admin/pods', ['pods' => $pods]);
	}


	/**
	 * Show the form for creating a new pod.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created pod in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified pod.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified pod.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified pod in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified pod from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
