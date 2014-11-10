@extends('layouts/default')
@section('title', $post->title)
@section('description', $post->excerpt)

@section('content')
    <div class="container">
        <div class="row">
            <!-- BLOG MAIN -->
            <div class="col-md-9 blog-main">
                <div class="blog-post">
                    <h1 class="blog-post-title">{{{ $post->title }}}</h1>
                    <p class="blog-date">{{{ $post->getDate() }}}</p>
                    <p class="lead blog-description">{{{ $post->excerpt }}}</p>
                    <img class="img-responsive blog-img" src="" alt="">

                    <p>{{{ $post->content }}}</p>
                </div>
            </div>
            <!-- END BLOG MAIN -->

            <!-- BLOG SIDEBAR -->
            <div class="col-md-3 blog-sidebar">
                <h3 class="section-title">Recent Articles</h3>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="../images/stock01.jpg" alt="" style="width:64px; height:64px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">Tiger To Play This Week At Memorial</a></h4>
                    </div>
                </div>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="" alt="" style="width:64px; height:64px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">What Happened To Nine Holes</a></h4>
                    </div>
                </div>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="" alt="" style="width:64px; height:64px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">Check This Awesome Story Out!</a></h4>
                    </div>
                </div>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="" alt="" style="width:64px; height:64px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">Check This Awesome Story Out!</a></h4>
                    </div>
                </div>
            </div>
            <!-- END BLOG SIDEBAR -->
        </div>
    </div>
@stop
