<?php

class HomeController extends BaseController {

    public function index()
    {
//        $users = DB::table('users')->where('username', '!=', 'Joe')->get();
//        return $users;
        
        //Eloquent format of interacting with the DB.
//        $user = new User;
//        $user->username = 'NewUser';
//        $user->password = Hash::make('password');
//        $user->save();
        
//        User::create([
//            'username' => 'AnotherUser',
//            'password' => Hash::make('1234')
//        ]);
        
//        $user = User::find(4);
//        $user->username = 'UpdatedName';
//        $user->save();
        
//        $user = User::find(4);
//        $user->delete();
        
//        return User::orderBy('username', 'asc')->take(2)->get();
        
        // Get the most recent practice of the day.
        $pod = Pod::orderBy('pod_date', 'desc')->first();
        
        // Get the 3 most recent posts.
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();

        return View::make('home', ['pod' => $pod, 'posts' => $posts]);
    }

}
