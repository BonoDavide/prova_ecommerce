<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class AnnouncementForm extends Component
{
    use WithFileUploads;

    // // opzione 1
    // public $title;
    // public $description;
    // public $image;
    // public $categories = [];

    // protected $rules = [
    //     'title' => 'required|min:5|max:30|string',
    //     'img' => 'required|image',
    //     'description' => 'required|min:10|max:255|string',
    //     'categoy' => 'required|array',
    // ];

    //opzione 2
    #[Validate('required|min:5|max:30')]
    public $title;
    #[Validate('required|min:10|max:255')]
    public $description;
    #[Validate('required|numeric|min:0')]
    public $price;
    #[Validate('required|image')]
    public $img;
    #[Validate('required|array')]
    public $category = [];

    public $allCategories;

    public function mount()
    {
        $this->allCategories = Category::all(); 
    }

    // funzione creazione annuncio
    public function createAnnouncement()
    {
        $this->validate();

        $imgPath = $this->img->store('announcement', 'public');

        Announcement::create(
            [
                'title' => $this->title,
                'img' => $imgPath,
                'category' => $this->category,
                'description' => $this->description,
                'price' => $this->price,
            ]
        );

        // richiamo della funzione per svuotare il form
        $this->cleanForm();
        session()->flash('message', 'Annuncio creato con successo!');
    }

    //funzione per svuotare il form
    protected function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->price = null;
        $this->img = null;
        $this->category = [];
    }


    //il render sempre come ultimo!
    public function render()
    {
        return view('livewire.announcement-form', [
            'allCategories' => $this->allCategories
        ]);
    }
}
