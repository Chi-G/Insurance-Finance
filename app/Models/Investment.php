<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'daily_percent',
        'per_day',
        'min_invest',
        'max_invest',
        'average_month',
    ];
}
