<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Place;

class PlaceApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_place()
    {
        $response = $this->postJson('/api/places', []);

        $response->assertStatus(201); 
    }

    /** @test */
    public function it_can_list_places()
    {
        Place::factory()->count(3)->create();

        $response = $this->getJson('/api/places');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /** @test */
    public function it_can_show_a_place()
    {
        $place = Place::factory()->create();

        $response = $this->getJson("/api/places/{$place->id}");

        $response->assertStatus(200)
                 ->assertJsonFragment(['id' => $place->id]);
    }

    /** @test */
    public function it_can_update_a_place()
    {
        $place = Place::factory()->create();

        $response = $this->putJson("/api/places/{$place->id}", []);

        $response->assertStatus(200); 
    }

    /** @test */
    public function it_can_delete_a_place()
    {
        $place = Place::factory()->create();

        $response = $this->deleteJson("/api/places/{$place->id}");

        $response->assertStatus(204);
    }
}
