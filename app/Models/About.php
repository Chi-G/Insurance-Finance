<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title1',
        'title1_desc',
        'mission_desc',
        'vision_desc',
        'experience_desc',
        'title2',
        'title2_desc',
        'image1',
        'image2',
    ];
}
