<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Store::create(['name' => 'Shop', 'phone' => '+375292709742', 'owner_id' => 1, 'working_hours' => '9:00 - 19:00', 'rating' => 5.0]);
    }
}

