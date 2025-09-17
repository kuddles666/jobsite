<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;

class ListingSeeder extends Seeder
{
    public function run(): void
    {
        // Create 10 random listings
        Listing::factory(10)->create();
    }
}
