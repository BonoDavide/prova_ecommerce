<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class AnnouncementEdit extends Component
{
    use WithFileUploads;

    public $announcementId;
    #[Validate('required|min:5|max:30')]
    public $title;
    #[Validate('required|min:10|max:255')]
    public $description;
    #[Validate('required|numeric|min:0')]
    public $price;
    #[Validate('required|image')]
    public $img;
    #[Validate('nullable|image')]
    public $newImg;
    #[Validate('required|array')]
    public $category = [];

    public $allCategories;

    // metodo per recuperare i dati dell'annuncio
    public function mount($announcementId)
    {
        $announcement = Announcement::find($announcementId);

        $this->announcementId = $announcement->id;
        $this->title = $announcement->title;
        $this->description = $announcement->description;
        $this->price = $announcement->price;
        $this->img = $announcement->img;
        $this->category = $announcement->categorie->pluck('id')->toArray();

        $this->allCategories = Category::all();
    }

    // metodo per modificare l'annuncio
    public function updateAnnouncement()
    {

        $this->validate();

        $announcement = Announcement::find($this->announcementId);

        // controlla se l'utente è il proprietario dell'annuncio
        if (Auth::id() !== $announcement->user_id) {
            abort(403, 'Non sei autorizzato a modificare questo annuncio.');
        }

        // se c'è una nuova immagine, la aggiorniamo
        if ($this->newImg) {
            $imgPath = $this->newImg->store('announcement', 'public');
            $data['img'] = $imgPath;
        }

        // aggiorna gli altri campi
        $announcement->update([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        // aggiorna le categorie tramite la tabella pivot
        $announcement->categories()->sync($this->category);

        return redirect()->route('announcement.list');
    }



    // sempre ultimo
    public function render()
    {
        return view('livewire.announcement-edit');
    }
}
