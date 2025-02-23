<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="display-3 text-center text-dark pt-5 pb-5">Modifica il tuo Annuncio</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form wire:submit.prevent="updateAnnouncement">
                    {{-- Sezione Titolo --}}
                    <div class="form-group mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" wire:model.defer="title">
                    </div>

                    {{-- Sezione Nuova Immagine, nullable --}}
                    <div class="form-group mb-3">
                        <label for="newImg">Nuova Immagine (opzionale)</label>
                        <input type="file" id="newImg" class="form-control" wire:model="newImg">
                        @if ($img)
                            <p class="mt-2">Immagine attuale:</p>
                            <img src="{{ asset('storage/' . $img) }}" class="img-thumbnail" width="150">
                        @endif
                    </div>

                    {{-- sezione categorie --}}
                    <div class="form-group mb-3">
                        <label class="form-label">Categorie</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($allCategories as $cat)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="category-{{ $cat->id }}"
                                        value="{{ $cat->id }}" wire:model="category">
                                    <label class="form-check-label"
                                        for="category-{{ $cat->id }}">{{ $cat->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Sezione Descrizione --}}
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="floatingTextarea" wire:model.defer="description"></textarea>
                        <label for="floatingTextarea">Descrizione</label>
                    </div>

                    {{-- Sezione Prezzo --}}
                    <div class="form-group mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control" wire:model.defer="price">
                    </div>

                    <button type="submit" class="btn btn-success">Aggiorna Annuncio</button>
                </form>
            </div>
        </div>
    </div>
</div>
