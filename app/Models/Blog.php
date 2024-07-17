<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_sm',
        'image_bg',
        'title',
        'desc1',
        'desc2',
        'excert',
    ];

    public $timestamps = true;
}
