<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'price', 'img'];

    // relazione 1-1 user-annuncio
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relazione n-n annuncio-categoria
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'announcement_category');
    }
}
