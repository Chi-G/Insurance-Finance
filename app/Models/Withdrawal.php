<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'amount',
        'currency',
        'user_id',
        'plan_id',
        'wallet_address',
        'status',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
