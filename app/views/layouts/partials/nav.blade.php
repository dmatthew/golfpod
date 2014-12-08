<div class="navbar-wrapper">
  <div class="container-fluid">
        <div class="navbar navbar-success" role="navigation">
          <div class="container">
                <div class="row">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand hidden-md hidden-lg" href="{{ URL::to('/') }}">GolfPOD</a>
                    </div>
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-left">
                        <li{{ (Request::is('/') ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('/') }}">Home</a>
                        </li>
                        <li class="{{ (Request::is('games') ? 'active ' : '') }}dropdown">
                          <a href="{{ URL::to('games') }}" class="dropdown-toggle">Games <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="{{ URL::to('games/putting') }}">Putting</a></li>
                            <li><a href="{{ URL::to('games/chip-pitch-sand') }}">Chipping/Pitching/Bunker</a></li>
                            <li><a href="{{ URL::to('games/driving-range') }}e">Driving Range</a></li>
                            <li><a href="{{ URL::to('games/on-course') }}">On Course</a></li>
                          </ul>
                        </li>
                        <li{{ (Request::is('news') ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('news') }}">News</a>
                        </li>
                        <li{{ (Request::is('about') ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('about') }}">About</a>
                        </li>
                        <li{{ (Request::is('contact') ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('contact') }}">Contact</a>
                        </li>
                      </ul>
                    </div>
                </div>
          </div>
        </div>
  </div>
</div>