@extends('layouts/default')
@section('title', 'Learn About GolfPOD')
@section('description', 'Learn about GolfPOD')

@section('content')
    <!-- TITLE JUMBOTRON -->
    <div id="about-jumbotron" class="jumbotron jumbotron-lg">
        <h1>About GolfPOD</h1>
    </div>
    <!-- END TITLE JUMBOTRON -->
    
    <!-- WELCOME MESSAGE -->
    <div class="container marketing">
        
        <!-- WELCOME MESSAGE -->
        <h3>Welcome!</h3>
        <p>Hello and thank you for visiting GolfPOD. If you are new to GolfPOD then we would like to say welcome and we hope you enjoy the site. If you are a returning friend and just wanted to learn more about the site and the people behind it then welcome back.</p>
        <p>GolfPOD is home to the Golf Practice of the Day, the extra special golfing game or drill that will help you improve your game and lead to new friends in the process. The practice of the day is posted to our homepage everyday and you can rest assured that it will never be a repeat from the day before. Each day we post something different in order to bring a new challenge to your game as well as to keep things interesting. The madness behind it all is simple, to get you to think beyond swing thoughts. No more worrying about elbow positions, shoulder plane, or anything else that takes your mind off of the task at hand, which is to get the ball in the cup. Golf is a very simple game, but at times can seem maddeningly frustrating. GolfPOD brings the fun back to practice. We provide a game for you to play each and every day – yes that’s 365 days a year, even holidays – that you can play alone, against a friend, or as part of your Saturday morning group.</p>
        <p>The games found here at GolfPOD can help you in all parts of your game. Need a new format for your next foursome? We can help with that. How about a little added excitement to your next bout around the chipping green? We’ve got games that can help turn you into a short game ninja. Looking for a way to get your child more interested in golf? We’re sure that we can make their next day at the course an enjoyable one. With a list of games and drills too long to count we are sure you can find something new for you next round or day at the range.</p>
        <!-- END WELCOME MESSAGE -->
        
        <!-- MEET OUR TEAM -->
        <hr class="featurette-divider">
        
        <h2 class="section-heading">Meet our Team</h2>
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Matt Davis <small class="text-muted">Co-Founder</small></h2>
                <p class="lead">Matt is a life long fan of golf. He started GolfPOD with one goal in mind: to help grow the game of golf. He saw a need to make golf more enjoyable for those who played the game and for those who did not. He came up with the idea for GolfPOD after hearing golfers and golf analysts on television talking about how not enough golfers played games out on the course and how more golfers should do so. Matt believes that golfers of all levels can improve their golfing ability and their enjoyment by playing games out on the course and challenging themselves with new interesting ways of playing golf.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('img/MattGolf.jpg') }}" class="featurette-image img-responsive" alt="image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img src="{{ asset('img/WLDC-2013-Derek-1.jpg') }}" class="featurette-image img-responsive" alt="image">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Derek Davis <small class="text-muted">Co-Founder</small></h2>
                <p class="lead">Derek is an aspiring long drive champion. Having been a baseball player in college, golf was not his first sport. Upon graduating from Oregon State University with a degree in marketing, and still interested in competitive sports it was a natural choice to start taking golf more seriously. After discovering the sport of long drive he began competing in 2012. He went on to compete in the 2013 <a href="http://www.longdrivers.com/remax-wldc" target="_blank">RE/MAX World Long Drive Championship</a>. Derek’s mission is to bring together the GolfPOD community and get golfers everywhere excited to play and practice golf.</p>
            </div>
        </div>
        <!-- END MEET OUR TEAM -->

        <hr class="featurette-divider">
    </div><!-- /container marketing -->
@stop
