<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'content'];

    // Many to Many with Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // User memiliki banyak POST
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
