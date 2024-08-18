<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Schema;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('countries')->truncate();
        DB::table('cities')->truncate();
        Schema::enableForeignKeyConstraints();
        Country::factory(10)->create();
        /* if(DB::table('countries')->count()>0) return;
        DB::table('countries')->insert([
            [
                'country_code'=>855,
                'country'=>'Cambodia',
                'currency'=>'KHR'
            ], [
                'country_code'=>66,
                'country'=>'Thailand',
                'currency'=>'THB'
            ], [
                'country_code'=>856,
                'country'=>'Laos',
                'currency'=>'LK'
            ]
        ]); */
    }
}
