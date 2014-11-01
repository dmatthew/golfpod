<?php

class GamesController extends BaseController {
    
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
     * Display all games.
     * 
     * @return Response
     */
    public function index()
    {   
        $games = $this->game->paginate(12);
        
        return View::make('games/index', ['games' => $games, 'category' => 'all']);
    }
    
    /**
     * Display all games from the given category.
     * 
     * @return Response
     */
    public function category($category)
    {
        $categories = array('putting', 'chip-pitch-sand', 'driving-range', 'on-course');
        
        if ( ! in_array($category, $categories))
        {
            return Redirect::to('games');
        }
        
        $games = $this->game->whereCategory($category)->paginate(12);
        
        return View::make('games/index', ['games' => $games, 'category' => $category]);
    }
    
    /**
     * Show a single game.
     * 
     * @param string $slug
     * @return Response
     */
    public function show($category, $slug)
    {
        $game = $this->game->whereSlug($slug)->first();
        
        //Redirect to the home page if the game is does not exist.
        if ( ! $game) {
            return Redirect::to('games');
        }
        
        //If this game is not in this category, go to the game and change category to the correct category.
        if ($game->category != $category) {
            $category = $game->category;
            return Redirect::to("games/$category/$slug");
        }
        $similarGames = $this->game->whereCategory($category)->orderBy(DB::raw('RAND()'))->take(3)->get();
        
        return View::make('games/show', ['game' => $game, 'similarGames' => $similarGames]);
    }

}
