<nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">||PPF||</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ps-5" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link" href="#">Catalogo Prodotti</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link" href="#">Pubblica Annuncio</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link" href="#">Ciao {{Auth::user()->name}}</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="btn btn-danger" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
