<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/"><img class="navbar-brand" id="menuLogo" src="../images/logo.png" alt="logo"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/jobs">Jobs</a>
            </li>
            @if(Auth::check())            
            <li class="nav-item">
                <a class="nav-link" href="/profile">{{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sell">new sell</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Log out</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/login">Log in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
            @endif
        </ul>
    </div>
</nav>
