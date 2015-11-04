<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navigation" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav">
                <li class="{{ Request::url() == url() ? 'active' : null }}"><a href="{{ url() }}">Home</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(auth()->check())
                    <p class="navbar-text">Signed in as {{ auth()->user()->name }}</p>
                    <li><a href="{{ url('admin') }}">Admin Panel</a></li>
                    <li><a href="{{ action('Auth\AuthController@getLogout') }}">Sign out</a></li>
                @else
                    <li class="{{ is_active('Auth\AuthController@getLogin') }}"><a href="{{ action('Auth\AuthController@getLogin') }}">Sign in</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>