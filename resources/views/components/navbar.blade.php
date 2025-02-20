<nav class="navbar navbar-expand-lg bg-dark pt-3 pb-3">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{ route('welcome') }}">||PPF||</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light active ps-5" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link text-light" href="#">Catalogo Prodotti</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link text-light" href="{{route('announcement.form')}}">Pubblica Annuncio</a>
                </li>
                @guest
                    <li class="nav-item ps-3">
                        <a class="nav-link text-light" href="{{ route('login') }}">Accedi</a>
                    </li>
                    <li class="nav-item ps-3">
                        <a class="nav-link text-light" href="{{ route('register') }}">Registrati</a>
                    </li>
                @else
                    <li class="nav-item ps-3">
                        <a class="nav-link text-light" href="#">Ciao {{ Auth::user()->name }}</a>
                    </li>
                    <form class="ps-3" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger ps-3">Logout</button>
                    </form>
                @endguest

            </ul>
        </div>
    </div>
</nav>
