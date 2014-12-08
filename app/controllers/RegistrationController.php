<?php

class RegistrationController extends BaseController {
    
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
     * Show the registration form.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('registration.create');
    }


    /**
     * Register a new user.
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
        
        Auth::login($user);
        return Redirect::to('/');
    }


}
