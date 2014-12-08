<?php

class SessionsController extends BaseController {
    
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
     * Show the login form.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::check())
        {
            return Redirect::to('admin');
        }
        return View::make('sessions/create');
    }


    /**
     * Login a user.
     *
     * @return Response
     */
    public function store()
    {
        $credentials = Input::only('username', 'password');
        $remember = Input::get('remember', false);
        
        if (Auth::attempt($credentials, $remember))
        {
            return Redirect::intended('dashboard');
        }
        
        return Redirect::back()->with('login_errors', 'That username/password combination does not exist.');
    }


    /**
     * Logout a user.
     *
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        
        return Redirect::route('getLogin');
    }


}
