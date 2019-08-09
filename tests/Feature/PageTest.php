<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PageTest extends TestCase
{
    use DatabaseMigrations,RefreshDatabase;

    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testProfileTest()
    {
        $response = $this->get('/profil');
        $response->assertStatus(302);

        $user = factory(\App\User::class)->create();
        $this->actingAs($user);

        $response = $this->get('/profil');
        $response->assertStatus(200);
    }

    public function testCreateJobTest()
    {
        $type = factory(\App\Type::class)->create();

        $user = factory(\App\User::class)->create();
        $this->actingAs($user);

        $response = $this->get('/job/create');
        $response->assertStatus(200);

        $valid = \Carbon\Carbon::now()->addWeek()->format('d.m.Y');
        $valid_db = \Carbon\Carbon::now()->addWeek()->toDateString();

        $data = [
            'title'       => 'New title',
            'description' => 'Lorem ipsum',
            'valid_until' => $valid,
            'type_id'     => $type->id,
            'remunere'    => 1
        ];

        $response = $this->post('job', $data);

        $this->assertDatabaseHas('jobs', [
            'user_id'     => $user->id,
            'title'       => 'New title',
            'description' => 'Lorem ipsum',
            'valid_until' => $valid_db,
            'type_id'     => $type->id,
            'remunere'    => 1
        ]);
    }


}

