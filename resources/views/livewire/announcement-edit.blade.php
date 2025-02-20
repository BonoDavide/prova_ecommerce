<div class="bg-primary container">
    <div class="row">
        <div class="col-12">
            <h2 class="display-3 text-center text-dark">Modifica il tuo Annuncio</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-5">
                <form wire:submit.prevent="updateAnnouncement">

                    {{-- sezione titolo --}}
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" wire:model.blur="title">
                        <div class="text-danger">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- sezione nuova immagine, nullable --}}
                    <div class="form-group">
                        <label for="newImg">Nuova Immagine</label>
                        <input type="file" id="newImg" class="form-control" wire:model="newImg">
                        @error('newImg')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        @if ($img)
                            <p>Immagine attuale:</p>
                            <img src="{{ asset('storage/' . $img) }}" class="img-thumbnail" width="150">
                        @endif
                    </div>

                    {{-- sezione categorie --}}
                    <div class="form-group">
                        <label for="category">Categorie</label>
                        <select multiple id="category" class="form-control" wire:model="category">
                            @foreach ($allCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->nome }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- sezione descrizione --}}
                    <div class="form-floating mb-3">
                        <textarea class="form-control" wire:model.blur="description"></textarea>
                        <label for="floatingTextarea">Descrizione</label>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- sezione prezzo --}}
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control" aria-describedby="emailHelp" wire:model.blur="price">
                        <div class="text-danger">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Modifica Annuncio</button>
                </form>
            </div>
        </div>
    </div>
</div>
