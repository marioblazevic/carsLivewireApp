<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
}
