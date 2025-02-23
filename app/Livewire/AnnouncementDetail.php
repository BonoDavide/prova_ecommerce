<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class AnnouncementDetail extends Component
{
    public $announcement;

    public function mount($announcementId){
        $this->announcement = Announcement::with('categories')->findOrFail($announcementId);
    }

    public function destroyAnnouncement($id)
    {
        $announcement = Announcement::findOrFail($id);

        // Controlla che l'utente sia il proprietario, se necessario
        if (Auth::id() !== $announcement->user_id) {
            abort(403, 'Non sei autorizzato a eliminare questo annuncio.');
        }

        $announcement->delete();
        session()->flash('message', 'Annuncio eliminato con successo!');

        return redirect()->route('announcement.list');
    }

    public function render()
    {
        return view('livewire.announcement-detail');
    }
}
