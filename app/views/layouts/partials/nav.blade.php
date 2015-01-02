<div class="navbar-wrapper">
  <div class="container-fluid">
        <div class="navbar navbar-success" role="navigation">
          <div class="container">
                <div class="row">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                      </button>
                      <a class="navbar-brand hidden-md hidden-lg" href="{{ URL::to('/') }}">GolfPOD</a>
                    </div>
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-left">
                        <li class="{{ (Request::is('/') ? 'active' : '') }}">
                            <a href="{{ URL::to('/') }}">Home</a>
                        </li>
                        <li class="{{ ((Request::is('games') || Request::is('games/*')) ? 'active ' : '') }}dropdown">
                          <a href="{{ URL::to('games') }}">Games</a>
                        </li>
                        <li class="{{ (Request::is('news') ? 'active"' : '') }}">
                            <a href="{{ URL::to('posts') }}">Blog</a>
                        </li>
                        <li class="{{ (Request::is('about') ? 'active' : '') }}">
                            <a href="{{ URL::to('about') }}">About</a>
                        </li>
                      </ul>
                    </div>
                </div>
          </div>
        </div>
  </div>
</div>