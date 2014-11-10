@extends('layouts/default')
@section('title', 'Welcome to GolfPOD')
@section('description', 'Welcome to GolfPOD')

@section('content')
    <!-- PRACTICE OF THE DAY -->
    <div class="container-fluid pod-row margin-b-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="heading"><a href="{{ URL::to('practice-of-the-day') }}">Practice of the day</a></h2>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="{{ asset('img/stock02.jpg') }}" alt="" title="" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 pod-content">
                    <p>{{{ $pod->getDate() }}}</p>
                    <h1><a href="{{{ URL::to("games/" . $pod->game->category . "/" . $pod->game->slug) }}}">{{{ $pod->game->title }}}</a></h1>
                    <p><span><a href="{{{ URL::to("games/" . $pod->game->category) }}}">{{{ $pod->game->category }}}</a></span><p>
                    <p>{{{ $pod->game->description }}}</p>
                    <a class="read-more" href="{{{ URL::to("games/" . $pod->game->category . "/" . $pod->game->slug) }}}">More details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRACTICE OF THE DAY -->
    
    
    <!-- NEWS AND FEATURES -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="section-title margin-b-20">
                    <a href="{{ URL::to('news') }}">News & Features</a>
                </h3>
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-6 col-lg-4 post">
                        <div class="thumbnail">
                            <a href="{{ URL::to("posts/$post->slug") }}">
                                <img src="{{ asset('img/stock01.jpg') }}" alt="" title="" />
                            </a>
                            <div class="caption">
                                <p class="post-date">{{{ $post->getDate() }}}</p>
                                <h3><a href="{{ URL::to("$post->slug") }}">{{{ $post->title }}}</a></h3>
                                <p>{{{ $post->excerpt }}}</p>
                                <a class="read-more" href="{{ URL::to("posts/$post->slug") }}">read more &#8680;</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- FOLLOW US! -->
            <div class="col-md-3">
                <h3 class="section-title margin-b-20">Follow Us!</h3>
                <div class="thumbnail">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="{{ asset('img/stock02.jpg') }}" alt="" style="width:64px; height:64px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="{{ asset('img/stock01.jpg') }}" alt="" style="width:64px; height:64px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END FOLLOW US -->
        </div>
    </div>
    <!-- END NEWS AND FEATURES -->
@stop

