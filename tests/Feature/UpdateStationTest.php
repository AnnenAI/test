<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateStationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
          $id=3;
          $station=[
              'name'=>'Station8',
              'latitude'=>12.8,
              'longitude'=>23.1,
              'city_id'=>2,
              'opening'=>date('H:i:s',strtotime('2:00')),
              'closing'=>date('H:i:s',strtotime('14:00'))
          ];
          $this->json('PUT', 'api/stations/'.$id.'/update',$station)
          ->assertStatus(200);
    }
}
