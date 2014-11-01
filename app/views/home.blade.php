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
                    <h1><a href="">{{{ $myGame->title }}}</a></h1>
                    <p><span><a href="#">{{{ $myGame->category }}}</a></span><p>
                    <p>{{{ $myGame->description }}}</p>
                    <a class="details-btn" href="{{ URL::to('games') }}">More details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRACTICE OF THE DAY -->
@stop

