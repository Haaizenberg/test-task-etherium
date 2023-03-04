<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'public_key',
        'private_key',
        'currency',
    ];

    public function getBalanceAttribute(): int
    {
        // TODO: get balance info from ETH node?

        return 0;
    }
}
