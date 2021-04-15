<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateStationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     *
     *
     */
    public function test_example()
    {
        $station=[
            'name'=>'Station12',
            'latitude'=>20.8,
            'longitude'=>43.1,
            'city_id'=>3,
            'opening'=>date('H:i:s',strtotime('9:00')),
            'closing'=>date('H:i:s',strtotime('21:00'))
        ];
        $this->json('POST', 'api/stations/store',$station)
        ->assertStatus(201);
    }
}
