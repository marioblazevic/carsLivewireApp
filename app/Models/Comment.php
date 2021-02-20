<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function belongTo()
    {
        return $this->belongsTo(Car::class);
    }
}
