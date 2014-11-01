<?php

/**
 * Description of UsersController
 *
 * @author Matt_Davis
 */
class UsersController extends BaseController {
    
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
     * Display all users.
     * /users
     * 
     * @return Response
     */
    public function index()
    {
        $users = $this->user->all();

        return View::make('users/index', ['users' => $users]);
    }
    
    /**
     * /users/{username}
     * 
     * @param string $username
     * @return Response
     */
    public function show($username)
    {
        $user = $this->user->whereUsername($username)->first(); // SELECT * FROM user WHERE username = USERNAME LIMIT 1
    
        return View::make('users/show', ['user' => $user]);
    }
    
    /**
     * Display a form to create a new user.
     * /users/create
     * 
     * @return Response
     */
    public function create()
    {
        return View::make('users/create');
    }
    
    /**
     * Save a new user/
     * /users
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
        
        // These are both the same
//        $user = new User;
//        $user->username = Input::get('username');
//        $user->password = Hash::make(Input::get('password'));
//        $user->save();
        $this->user->save();
        
        // These are both the same
//        return Redirect::to('/users'); 
        return Redirect::route('users.index');
    }
}
