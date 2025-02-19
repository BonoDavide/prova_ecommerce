
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                {{-- Card Bootstrap per il form di registrazione --}}
                <div class="card">
                    <div class="card-header">Registrazione</div>
                    <div class="card-body">
                        {{-- Form di registrazione che invia i dati alla route "register" --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf {{-- Protezione CSRF --}}

                            {{-- Campo Nome --}}
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>

                            {{-- Campo Email --}}
                            <div class="form-group mt-3">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>

                            {{-- Campo Password --}}
                            <div class="form-group mt-3">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            {{-- Campo per confermare la Password --}}
                            <div class="form-group mt-3">
                                <label for="password_confirmation">Conferma Password</label>
                                <input id="password_confirmation" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>

                            {{-- Pulsante per inviare il form --}}
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success">Registrati</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

