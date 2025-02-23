<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-dark text-center display-3 pt-5 pb-5">Tutti gli Annunci</h1>
            </div>
        </div>
        <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-success w-100">
                    {{ session('message') }}
                </div>
            @endif

            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-4">
                    <div class="card card-custom mb-3">
                        @if ($announcement->img)
                            <img src="{{ asset('storage/' . $announcement->img) }}" class="card-img-top card-custom"
                                alt="{{ $announcement->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text"><strong>Prezzo:</strong> €{{ $announcement->price }}</p>

                            @if ($announcement->categories->isNotEmpty())
                                <p class="card-text ">
                                    <small class="text-muted">
                                        Categorie:
                                        @foreach ($announcement->categories as $category)
                                            {{ $category->name }}@if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </small>
                                </p>
                            @endif

                            {{-- bottone dettaglio --}}
                            <a href="{{ route('announcement.detail', $announcement->id) }}" class="btn btn-dark text-light">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</div>
