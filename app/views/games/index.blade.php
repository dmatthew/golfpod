@extends('layouts/default')
@section('title', 'View all GolfPOD Games')
@section('description', 'View all the games on GolfPOD')

@section('content')
    <!-- GAMES JUMBOTRON -->
    <div id="games-jumbotron" class="jumbotron jumbotron-sm">
            <h1>Games</h1>
    </div>
    <!-- END GAMES JUMBOTRON -->


    <!-- GAMES FILTER NAVBAR -->
    <div class="container-fluid">
        <div class="row filter-box margin-b-20">
            <div class="container">
                <div class="row nav-pills-center">
                    <ul class="nav nav-pills">
                        <li{{ ($category === 'all' ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('games') }}">All Games</a>
                        </li>
                        <li{{ ($category === 'putting' ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('games/putting') }}">Putting</a>
                        </li>
                        <li{{ ($category === 'chip-pitch-sand' ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('games/chip-pitch-sand') }}">Chip/Pitch/Sand</a>
                        </li>
                        <li{{ ($category === 'driving-range' ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('games/driving-range') }}">Driving Range</a>
                        </li>
                        <li{{ ($category === 'on-course' ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('games/on-course') }}">On Course</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END GAMES FILTER NAVBAR -->
    
    
    <!-- GAMES GALLERY -->
    <div class="container">
        @foreach(array_chunk($games->all(), 4) as $row)
        <div class="row">
            @foreach($row as $game)
            <div class="col-md-3">
                <a href="{{ URL::to("games/$game->category/$game->slug") }}">
                    <img src="{{{ asset('img/'.$game->media()->first()->path) }}}" alt="{{{ $game->title }}}" class="img-responsive">
                    <h2>{{{ $game->title }}}</h2>
                    <p>{{{ $game->category }}}</p>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach
        
        <!-- PAGINATION -->
        <div class="pagination-center">
        {{ $games->links() }}
        </div>
        <!-- END PAGINATION -->
    </div>
    <!-- END GAMES GALLERY -->
@stop
