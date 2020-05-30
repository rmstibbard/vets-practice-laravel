<nav class="mt-4 navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">TipTopVets</a>
    <ul class="navbar-nav ml-auto">
        @if (!Auth::check())
            <li class="nav-item active">
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">CONTACT</a>
            </li>
        @endif

        @if (Auth::check())
            <li class="nav-item active">
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/users/">USERS</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/owners/">OWNERS</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/animals/">ANIMALS</a>
            </li>
        @endif

    </ul>

    <form class="form-inline" method="get" action="/search">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>



    @if (Auth::check())
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger logout-button" type="submit">Logout</button>
        </form>
    @endif


</nav>
