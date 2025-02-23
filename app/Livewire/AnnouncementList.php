<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;


class AnnouncementList extends Component
{

    public function destroy($id){
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();
        session()->flash('message', 'Annuncio eliminato con successo!');
    }

    // sempre ultimo
    public function render()
    {
        // recupera tutti i record, con le relative categorie(potrebbe alleggerire un pò il sistema caricarle in anticipo)
        $announcements = Announcement::with('categories')->get();

        return view('livewire.announcement-list', compact('announcements'));
    }
}
