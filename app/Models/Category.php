<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function annunci()
    {
        // relazione n-n annuncio-categoria
        return $this->belongsToMany(Announcement::class, 'announcement_category');
    }
}
