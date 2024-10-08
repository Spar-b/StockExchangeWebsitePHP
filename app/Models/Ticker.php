<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticker extends Model
{
    use HasFactory;

    protected $fillable = [
        'symbol',
        'open_vlaue',
        'close_value',
        'current_value',
        'market_cap'
    ];
}
