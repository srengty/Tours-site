<?php

namespace Database\Seeders;

use App\Models\TouristicSite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TouristicSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TouristicSite::truncate();
        TouristicSite::factory(10)->create();
    }
}
