<?php namespace Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
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
        
        return View::make('admin/posts/index', ['posts' => $posts]);
	}


	/**
	 * Show the form for creating a new post.
	 *
	 * @return Response
	 */
	public function create()
	{
		//Show the form for creating/updating a post.
        return View::make('admin/posts/create');
	}


	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        
        if ( ! $this->post->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($this->post->errors);
        }
        
        $post = new Post;
        $post->title = Input::get('title');
        $post->published_date = Input::get('published_date');
        $post->excerpt = Input::get('excerpt');
        $post->content = Input::get('content');
        $post->save();
        
        return Redirect::to('gp/posts');
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
		$post = $this->post->find($id);
        
        return View::make('admin/posts/edit', ['post' => $post]);
	}


	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
        $post = $this->post->find($id);
        
        if ( ! $post->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($post->errors);
        }
        
        $post->title = Input::get('title');
        $post->published_date = Input::get('published_date');
        $post->excerpt = Input::get('excerpt');
        $post->content = Input::get('content');
        $post->save();
        
        return Redirect::to('gp/posts');
	}


	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = $this->post->find($id);
        $post->delete();
        
        return Redirect::to('gp/posts');
	}


}
