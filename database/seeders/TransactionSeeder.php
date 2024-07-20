<?php

namespace Database\Seeders;

use App\Models\Transaction;
use App\Models\Subscription;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = Transaction::all();

        foreach ($transactions as $transaction) {
            $subscription = Subscription::where('user_id', $transaction->user_id)
                                        ->where('plan', $transaction->subscription_plan)
                                        ->first();

            if ($subscription) {
                $transaction->subscription_id = $subscription->id;
                $transaction->save();
            }
        }
    }
}
