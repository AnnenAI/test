<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetStationsByCityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_example()
    {
      $id=3;
      $this->json('GET', 'api/stations/city/'.$id)
      ->assertStatus(200);
    }
}
