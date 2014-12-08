<?php namespace Admin;

use Illuminate\Support\Facades\View;
use Post;

class PostsController extends \BaseController {

	protected $post;
    
    /**
     * 
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

	/**
	 * Display a list of posts.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get a list of posts.
        $posts = $this->post->paginate(30);
        
        return View::make('admin/posts', ['posts' => $posts]);
	}


	/**
	 * Show the form for creating a new post.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
