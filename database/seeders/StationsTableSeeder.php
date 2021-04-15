<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Station;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Station::truncate();
        Station::create([
          'name' => 'Station1',
          'latitude'=>20.32,
          'longitude'=>32.23,
          'city_id' => 1,
          'opening' => date('H:i:s',strtotime('9:00')),
          'closing' => date('H:i:s',strtotime('18:00'))
        ]);
        Station::create([
          'name' => 'Station2',
          'latitude'=>12.32,
          'longitude'=>23.23,
          'city_id' => 1,
          'opening' => date('H:i:s',strtotime('10:00')),
          'closing' => date('H:i:s',strtotime('20:00'))
        ]);
        Station::create([
          'name' => 'Station3',
          'latitude'=>33.32,
          'longitude'=>36.23,
          'city_id' => 3,
          'opening' => date('H:i:s',strtotime('9:00')),
          'closing' => date('H:i:s',strtotime('19:00'))
        ]);
        Station::create([
          'name' => 'Station4',
          'latitude'=>43.32,
          'longitude'=>22.23,
          'city_id' => 3,
          'opening' => date('H:i:s',strtotime('8:00')),
          'closing' => date('H:i:s',strtotime('17:00'))
        ]);
        Station::create([
          'name' => 'Station5',
          'latitude'=>37.32,
          'longitude'=>12.23,
          'city_id' => 5,
          'opening' => date('H:i:s',strtotime('9:00')),
          'closing' => date('H:i:s',strtotime('21:00'))
        ]);
    }
}
