<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'created_at'];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
