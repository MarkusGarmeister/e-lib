<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function libraries()
    {
        return $this->belongsToMany(Library::class)->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class)->withTimestamps();
    }
}
