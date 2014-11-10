@extends('layouts/default')
@section('title', 'View the practice of the day month by month.')
@section('description', 'View the practice of the day month by month.')

@section('content')
    <!-- JUMBOTRON -->
    <div id="pod-jumbotron" class="jumbotron jumbotron-sm">
        <h1>Practice of the day</h1>
    </div>
    <!-- END JUMBOTRON -->
    
    
    <!-- FILTER GALLERY DROPDOWN -->
    <div class="container-fluid">
        <div class="row filter-box margin-b-20">
            <div class="container">
                <div class="row nav-pills-center">
                    <div class="btn-group">
                        <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                            Select a month <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                        @foreach ($dates as $myDate)
                            <li><a href="{{{ URL::to("practice-of-the-day/" . $myDate->format('Y') . '/' . $myDate->format('m')) }}}">{{{ $myDate->format("F Y") }}}</a></li>
                        @endforeach
                        </ul>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <!-- END FILTER GALLERY DROPDOWN -->
    
    
    <!-- POD GALLERY -->
    <div class="container">
        <div class="row">
        @foreach ($pods as $pod)
            <div class="col-md-3 col-sm-6">
                <p>{{{ $pod->getDate() }}}</p>
                <a href="{{{ URL::to("games/" . $pod->game->category . "/" . $pod->game->slug) }}}">
                    <img class="img-responsive" alt="" src="{{{ asset('img/stock01.jpg') }}}" />
                </a>
                <h2><a href="{{{ URL::to("games/" . $pod->game->category . "/" . $pod->game->slug) }}}">{{{ $pod->game->title }}}</a></h2>
            </div>
        @endforeach
        </div>
        <ul class="pager">
        @if ($pagerLinks['prev'])
            <li>
                <a href="{{{ URL::to("practice-of-the-day/" . $pagerLinks['prev']['year'] . "/" . $pagerLinks['prev']['month']) }}}">Older &rarr;</a>
            </li>
        @endif
        @if ($pagerLinks['next'])
            <li>
                <a href="{{{ URL::to("practice-of-the-day/" . $pagerLinks['next']['year'] . "/" . $pagerLinks['next']['month']) }}}">&larr; Newer</a>
            </li>
        @endif
        </ul>
    </div>
    <!-- END POD GALLERY -->
@stop
