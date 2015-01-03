@extends('layouts/default')
@section('title', 'Golf Practice of the Day - GolfPOD')
@section('description', 'Golf Practice of the Day, Games, Drills and more.')

@section('content')
    <!-- PRACTICE OF THE DAY -->
    <div class="container-fluid pod-row margin-b-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 pod-video">
                    <h2 class="heading"><a href="{{ URL::to('practice-of-the-day') }}">Practice of the day</a></h2>
                    <div class="thumbnail">
                        <div class="container-video embed-responsive embed-responsive-16by9">
                            <iframe class="embed-reponsive-item" width="560" height="315" src="http://www.youtube.com/embed/{{{ $pods->first()->game->youtube_id }}}?rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 pod-content">
                    <p>{{{ $pods->first()->getDate() }}}</p>
                    <h1><a href="{{{ URL::to("games/" . $pods->first()->game->category . "/" . $pods->first()->game->slug) }}}">{{{ $pods->first()->game->title }}}</a></h1>
                    <p><span><a href="{{{ URL::to("games/" . $pods->first()->game->category) }}}">{{{ $pods->first()->game->category }}}</a></span><p>
                    <p>{{{ $pods->first()->game->description }}}</p>
                    <a class="read-more" href="{{{ URL::to("games/" . $pods->first()->game->category . "/" . $pods->first()->game->slug) }}}">More details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRACTICE OF THE DAY -->
    
    
    <!-- FEATURED GAMES -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div style="margin: 20px auto 30px;" class="">
                    <div class="input-group input-group-lg">
                        <input style="font-size: 20px; font-weight: bold;" placeholder="Search..." class="form-control" type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
        <div class="row">
            <?php $i = -1; ?>
            @foreach ($pods as $pod)
            <?php $i++; ?>
            <?php if ($i === 0) {continue;} ?>
            <div class="col-md-6 col-lg-4 post{{{ (($i-1) % 3 === 0) ? ' clear-grid' : '' }}}">
                <div class="thumbnail">
                    <a href="{{{ URL::to("games/" . $pod->game->category . "/" . $pod->game->slug) }}}">
                        <img src="http://img.youtube.com/vi/{{{ $pod->game->youtube_id }}}/mqdefault.jpg" alt="" title="">
                    </a>
                    <div class="caption">
                        <p class="post-date">{{{ $pod->getDate() }}}</p>
                        <h3><a href="{{{ URL::to("games/" . $pod->game->category . "/" . $pod->game->slug) }}}">{{{ $pod->game->title }}}</a></h3>
                        <p>{{{ str_limit($pod->game->excerpt, 100, '') }}}</p>
                        <p class="category-flag">{{{ $pod->game->category }}}</p>
                        <a class="read-more" href="{{{ URL::to("games/" . $pod->game->category . "/" . $pod->game->slug) }}}">read more ⇨</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row margin-b-20">
            <div class="col-sm-12 col-lg-4 col-lg-offset-4">
                <a href="{{{ URL::to('games') }}}" class="btn btn-success btn-lg btn-block">
                  See All Games
                </a>
            </div>
        </div>
    </div>
    <!-- END FEATURED GAMES -->
@stop

