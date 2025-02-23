<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class AnnouncementDetail extends Component
{
    public $announcement;

    public function mount($announcementId){
        $this->announcement = Announcement::with('categories')->findOrFail($announcementId);
    }

    public function render()
    {
        return view('livewire.announcement-detail');
    }
}
