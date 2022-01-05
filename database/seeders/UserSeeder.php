<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Actions\Fortify\CreateNewUser;

class UserSeeder extends Seeder
{

    public function run(): void
    {

        User::factory()
            ->withRoles(
                'Administrator',
                'Project Manager',
                'Staff'
            )
            ->count(35)
            ->create();

        /* Administrator */
        tap(User::create([
            'name' => 'Iynga Iyathurai Iyngaran',
            'title' => 'Hero',
            'email' => 'iynga@sas.co.nz',
            'password' => bcrypt('password'),
        ]), function (User $user) {
            (new CreateNewUser())->createTeam($user);
            $user->assignRole(['Administrator']);
        });
    }
}
