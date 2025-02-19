<x-layout>

    <div class="container">
        <div class="row pt-3 pb-5">
            <div class="col-12">
                <h1 class="display-1 text-center text-dark">Accedi in piattaforma!</h1>
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md-4">
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

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group pt-3">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group pt-4">
                            <button type="submit" class="btn btn-success">Accedi</button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">Password dimenticata?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</x-layout>
