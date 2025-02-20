<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="display-3 text-center text-dark pt-5 pb-5">Pubblica il tuo Annuncio</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form wire:submit="createAnnouncement">
                    {{-- sezione titolo --}}
                    <div class="form-group mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" wire:model.blur="title">
                    </div>

                    {{-- sezione immagine --}}
                    <div class="form-group mb-3">
                        <label for="img">Immagine</label>
                        <input type="file" id="img" class="form-control" wire:model="img">
                    </div>

                    {{-- sezione categorie --}}
                    <div class="form-group mb-3">
                        <label class="form-label">Categorie</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($allCategories as $category)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="category-{{ $category->id }}" value="{{ $category->id }}" wire:model="category">
                                    <label class="form-check-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- sezione descrizione --}}
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="floatingTextarea" wire:model.blur="description"></textarea>
                        <label for="floatingTextarea">Descrizione</label>
                    </div>

                    {{-- sezione prezzo --}}
                    <div class="form-group mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control" wire:model.blur="price">
                    </div>

                    <button type="submit" class="btn btn-success">Pubblica Annuncio</button>
                </form>
            </div>
        </div>

    </div>
</div>
