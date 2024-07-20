<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'min_investment', 'max_investment', 'average_monthly', 'daily_profit'];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
