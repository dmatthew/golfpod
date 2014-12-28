@extends('layouts/default')
@section('title', $game->title)
@section('description', $game->excerpt)

@section('content')
    <!-- GAME TITLE JUMBOTRON -->
    <div class="jumbotron jumbotron-sm">
        <h1>{{{ $game->title }}}</h1>
    </div>
    <!-- END GAME TITLE JUMBOTRON -->
    
    
    <!-- GAME VIDEO -->
    <div class="container container-video">
        <video width="800" controls>
            <source src="" type="video/mp4">
            Your browser does not support video.
        </video>
    </div>
    <!-- END GAME VIDEO -->
    
    
    
    <div class="container">
        <hr class="featurette-divider">
    </div>

    <!-- GAME DESCRIPTION -->
    <div class="container marketing">
        <div class="col-xs-12">
            <h2 id="how-to-play" class="section-heading">How to Play</h2>
        </div>
        <div class="col-xs-12">
            <p>{{{ $game->description }}}</p>
        </div>
    </div>
    <!-- END GAME DESCRIPTION -->

    <div class="container">
        <hr class="featurette-divider">
    </div>
    
    <!-- SIMILAR GAMES -->
    <div class="container marketing">
        <h2 class="section-heading">Similar Games</h2>
        @foreach($similarGames as $similarGame)
        <div class="col-lg-4">
            <img class="img-rounded" style="width: 140px; height: 140px;" src="{{{ asset('img/'.$similarGame->media()->first()->path) }}}" alt="{{{ $similarGame->title }}}">
            <h4>{{{ $similarGame->title }}}</h4>
            <p>{{{ $similarGame->excerpt }}}</p>
            <p><a class="btn read-more" role="button" href="{{ URL::to("games/$similarGame->category/$similarGame->slug") }}">View game</a></p>
        </div>
        @endforeach
    </div>
    <!-- END SIMILAR GAMES -->
@stop
