<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function loggedInUserCanEditOrDeletePost(): bool
    {
        if(!auth()->check()) {
            return false;
        }

        if(auth()->user()->has_full_edit_or_delete_rights) {
            return true;
        }

        return $this->author_id === auth()->id();
    }

}
