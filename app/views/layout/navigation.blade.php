<nav role="navigation" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ URL::route('home') }}" class="navbar-brand">Laravel</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ URL::route('home') }}">Home</a></li>
                @if (Auth::check())
                    <li><a href="{{ URL::route('profile-user') }}">Logged In As <b>{{ Auth::user()->username }}</b></a></li>
                    <li><a href="{{ URL::route('account-sign-out') }}">Sign Out</a></li>
                @else
                    <li><a href="{{ URL::route('account-sign-in') }}">Sign In</a></li>
                    <li><a href="{{ URL::route('account-create') }}">Create Account</a></li>
                @endif
            </ul>
        </div>
        </div>
</nav>