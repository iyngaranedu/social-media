<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_see_the_users_list()
    {
        User::factory()
            ->withRoles(
                'Administrator',
                'Project Manager',
                'Staff'
            )
            ->count(35)
            ->create();

        $this->assertDatabaseCount(User::class, 35);

    }
}
