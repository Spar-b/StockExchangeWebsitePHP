<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Ticker;
use App\Models\Company;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Company::factory(2)->create([

        ]);
        Ticker::factory(5)->create([
            #'symbol' => 'TSLA',
            #'open_value' => 10,
            #'close_value' => 12,
            #'current_value' => 11,
            #'market_cap' => 1000
        ]);
    }
}
