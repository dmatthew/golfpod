<?php namespace Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use User;

class UsersController extends \BaseController {
    
    protected $user;
    
    /**
     * 
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

	/**
	 * Display a list of users.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get a list of users.
        $users = $this->user->paginate(30);
        
        return View::make('admin/users/index', ['users' => $users]);
	}


	/**
	 * Show the form for creating a new user.
	 *
	 * @return Response
	 */
	public function create()
	{
		//Show the form for creating/updating a user.
        return View::make('admin/users/create');
	}


	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        
        if ( ! $this->user->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }
        
        $user = new User;
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        
        return Redirect::to('gp/users');
	}


	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->user->find($id);
        
        return View::make('admin/users/edit', ['user' => $user]);
	}


	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
        $user = $this->user->find($id);
        
        if ( ! $user->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($user->errors);
        }
        
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->save();
        
        return Redirect::to('gp/users');
	}


	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = $this->user->find($id);
        $user->delete();
        
        return Redirect::to('gp/users');
	}


}
