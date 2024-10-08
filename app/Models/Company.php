<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo_url',
        'description',
        'phone_number',
        'country',
        'address',
        'foundation_date',
        'num_workers',
        'value'
    ];
}
