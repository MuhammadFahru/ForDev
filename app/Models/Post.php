<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['judul','category_id','slug','konten','thumbnail'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}