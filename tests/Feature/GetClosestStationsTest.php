<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetClosestStationsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
      $request=[
        'lat'=>'22.56',
        'lng'=>'53.4'
      ];
      $this->json('GET', 'api/stations/closest',$request)
      ->assertStatus(200);
    }
}
