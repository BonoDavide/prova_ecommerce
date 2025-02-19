<x-layout>

    <div class="container">
        <div class="row pt-3 pb-5">
            <div class="col-12">
                <h1 class="display-1 text-center text-dark">Registrati in piattaforma!</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password_confirmation">Conferma Password</label>
                            <input id="password_confirmation" type="password" class="form-control"
                                name="password_confirmation" required>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-danger">Registrati</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</x-layout>
