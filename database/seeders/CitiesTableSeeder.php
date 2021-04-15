<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #City::truncate();
        City::create(['name' => 'Kyiv']);
        City::create(['name' => 'Lviv']);
        City::create(['name' => 'Odessa']);
        City::create(['name' => 'Kharkiv']);
        City::create(['name' => 'Dnipro']);
        City::create(['name' => 'Sumy']);
    }
}
