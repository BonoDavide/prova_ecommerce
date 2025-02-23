<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card">
                @if ($announcement->img)
                    <img src="{{ asset('storage/' . $announcement->img) }}" class="card-img-top"
                        alt="{{ $announcement->title }}">
                @endif
                <div class="card-body">
                    <h3 class="card-title">{{ $announcement->title }}</h3>
                    <p class="card-text">{{ $announcement->description }}</p>
                    <p class="card-text"><strong>Prezzo:</strong> €{{ $announcement->price }}</p>

                    @if ($announcement->categories->isNotEmpty())
                        <p class="card-text">
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
                    <div class="d-flex">
                        {{-- bottone che porta alla vista di modifica --}}
                        <div class="mt-2 mb-2">
                            <a href="{{ route('announcement.edit', ['announcementId' => $announcement->id]) }}"
                                class="btn btn-warning">Modifica</a>
                        </div>
                        {{-- bottone per eliminare un annuncio --}}
                        <div class="mt-2 mb-2 ps-3">
                            <a href="#" wire:click.prevent="destroyAnnouncement({{ $announcement->id }})" onclick="return confirm('Sei sicuro di voler eliminare questo annuncio?')" class="btn btn-danger">Elimina</a>
                        </div>
                        {{-- bottone per tornare indietro --}}
                        <div class="mt-2 mb-2 ps-3">
                            <a href="{{ route('announcement.list') }}" class="btn text-light btn-dark">Indietro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
