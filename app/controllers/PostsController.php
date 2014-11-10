<?php

class PostsController extends BaseController {
    
    protected $game;
    
    /**
     * 
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Display all posts.
     * 
     * @return Response
     */
    public function index()
    {   
        $posts = $this->post->paginate(10);
        
        return View::make('news/index', ['posts' => $posts]);
    }
    
    /**
     * Show a single post.
     * 
     * @param string $slug
     * @return Response
     */
    public function show($slug)
    {
        $post = $this->post->whereSlug($slug)->first();
        
        //Redirect to the home page if the post does not exist.
        if ( ! $post) {
            return Redirect::to('news');
        }
        
        return View::make('news/show', ['post' => $post]);
    }

}
