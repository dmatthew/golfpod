<?php namespace Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
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
        
        return View::make('admin/pods/index', ['pods' => $pods]);
	}


	/**
	 * Show the form for creating a new pod.
	 *
	 * @return Response
	 */
	public function create()
	{
		//Show the form for creating/updating a pod.
        return View::make('admin/pods/create');
	}


	/**
	 * Store a newly created pod in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        
        if ( ! $this->pod->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($this->pod->errors);
        }
        
        $pod = new Pod;
        $pod->game_id = Input::get('game_id');
        $pod->pod_date = Input::get('pod_date');
        $pod->save();
        
        return Redirect::to('gp/pods');
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
		$pod = $this->pod->find($id);
        
        return View::make('admin/pods/edit', ['pod' => $pod]);
	}


	/**
	 * Update the specified pod in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
        $pod = $this->pod->find($id);
        
        if ( ! $pod->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($pod->errors);
        }
        
        $pod->game_id = Input::get('game_id');
        $pod->pod_date = Input::get('pod_date');
        $pod->save();
        
        return Redirect::to('gp/pods');
	}


	/**
	 * Remove the specified pod from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pod = $this->pod->find($id);
        $pod->delete();
        
        return Redirect::to('gp/pods');
	}


}
