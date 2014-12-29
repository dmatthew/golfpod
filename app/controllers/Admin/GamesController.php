<?php namespace Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Game;

class GamesController extends \BaseController {
    
    protected $game;
    
    /**
     * 
     * @param Game $game
     */
    public function __construct(Game $game)
    {
        $this->game = $game;
    }

	/**
	 * Display a list of games.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get a list of games.
        $games = $this->game->paginate(30);
        
        return View::make('admin/games/index', ['games' => $games]);
	}


	/**
	 * Show the form for creating a new game.
	 *
	 * @return Response
	 */
	public function create()
	{
		//Show the form for creating/updating a game.
        return View::make('admin/games/create');
	}


	/**
	 * Store a newly created game in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        
        if ( ! $this->game->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($this->game->errors);
        }
        
        $game = new Game;
        $game->title = Input::get('title');
        $game->category = Input::get('category');
        $game->youtube_id = Input::get('youtube_id');
        $game->description = Input::get('description');
        $game->excerpt = Input::get('excerpt');
        $game->save();
        
        return Redirect::to('gp/games');
	}


	/**
	 * Display the specified game.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified game.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$game = $this->game->find($id);
        
        return View::make('admin/games/edit', ['game' => $game]);
	}


	/**
	 * Update the specified game in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
        $game = $this->game->find($id);
        
        if ( ! $game->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($game->errors);
        }
        
        $game->title = Input::get('title');
        $game->excerpt = Input::get('excerpt');
        $game->description = Input::get('description');
        $game->save();
        
        return Redirect::to('gp/games');
	}


	/**
	 * Remove the specified game from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$game = $this->game->find($id);
        $game->delete();
        
        return Redirect::to('gp/games');
	}


}
