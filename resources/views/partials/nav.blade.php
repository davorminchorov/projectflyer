<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">ProjectFlyer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            @if($signedIn)
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p class="navbar-text">Hello, {!! $user->name !!}</p>
                    </li>
                    <li class="">
                        <a href="/auth/logout">Logout</a>
                    </li>
                </ul>
            @endif
            @if(Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                </ul>
            @endif
        </div><!--/.nav-collapse -->
    </div>
</nav>