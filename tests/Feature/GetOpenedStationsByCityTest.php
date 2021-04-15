<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetOpenedStationsByCityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $id=2;
        $this->json('GET', 'api/stations/opened/city/'.$id)
        ->assertStatus(200);
    }
}
