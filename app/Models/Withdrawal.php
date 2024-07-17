<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date', 'amount', 'currency'];

    protected $casts = [
        'date' => 'datetime',
    ];
}
