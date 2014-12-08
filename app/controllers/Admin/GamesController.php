<?php namespace Admin;

use Illuminate\Support\Facades\View;
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
        
        return View::make('admin/games', ['games' => $games]);
	}


	/**
	 * Show the form for creating a new game.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created game in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}


	/**
	 * Update the specified game in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified game from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
