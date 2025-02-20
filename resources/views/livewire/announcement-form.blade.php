<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="display-3 text-center text-dark pb-5">Pubblica il tuo Annuncio</h2>
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
                        <label for="category">Categorie</label>
                        <select multiple id="category" class="form-control" wire:model="category">
                            @foreach ($allCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->nome }}</option>
                            @endforeach
                        </select>
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
