<?php

class SessionsController extends BaseController {

    /**
     * Show the login form.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::check())
        {
            return Redirect::to('/admin');
        }
        return View::make('sessions/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $credentials = Input::only('username', 'password');
        $remember = Input::get('remember', false);
        
        if (Auth::attempt($credentials, $remember))
        {
            return "Welcome " .  Auth::user()->username;
        }
        
        return Redirect::back()->withInput();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        
        return Redirect::route('sessions.create');
    }


}
