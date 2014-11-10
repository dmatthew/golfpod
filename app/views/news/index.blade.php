@extends('layouts/default')
@section('title', 'View all GolfPOD news and features.')
@section('description', 'View all the news and features on GolfPOD.')

@section('content')
    <div class="container">
		<div class="row">
			<div class="blog-header">
				<h1 style="font-size: 48px; margin-bottom: 0px; font-weight: 600;" class="blog-title">News and Features</h1>
				<p class="lead blog-description">Stories and thoughts on golf</p>
			</div>
			<div class="col-md-9 blog-main">
            @foreach($posts as $post)
                <div class="row blog-row">
                    <div class="col-md-4">
                        <img class="img-responsive" alt="" src="">
                    </div>
                    <div class="col-md-8">
						<h2><a href="{{ URL::to("news/$post->slug") }}" >{{{ $post->title }}}</a></h2>
						<p class="post-date">{{{ $post->getDate() }}}</p>
						<p>{{{ $post->excerpt }}}</p>
						<p><a class="read-more" href="{{ URL::to("news/$post->slug") }}">read more &#8680;</a></p>
					</div>
                </div>
            @endforeach
            
                <!-- PAGINATION -->
                <div class="pagination-center">
                {{ $posts->links() }}
                </div>
                <!-- END PAGINATION -->
            </div>
            
            <div class="col-md-3 blog-sidebar">
				<h3 class="section-title">Recent Articles</h3>
            </div>
        </div>
    </div>
@stop
