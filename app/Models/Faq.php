<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'faq1_title',
        'faq1_desc',
        'faq2_title',
        'faq2_desc',
        'faq3_title',
        'faq3_desc',
        'faq4_title',
        'faq4_desc',
        'faq5_title',
        'faq5_desc',
    ];
}
