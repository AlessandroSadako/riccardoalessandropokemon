<nav class="navbar navbar-expand-lg fixed-top py-3 fs-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GalaxyTeam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navcustom" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item d-flex align-self-center">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-2">{{ Auth::user()->name }}</span>
                            <div class="profile-pic">
                                <img class="immagineprofilopers" src="/immagini/007Squirtle.webp">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('profile.show', ['username' => Auth::user()->name]) }}">Profilo</a></li>
                            <li><a class="dropdown-item" href="{{ route('contacts') }}">Contattaci</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="post" class="border-top">
                                    @csrf
                                    <button type="submit" class="btn btn-danger rounded mx-3 mt-2">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
