<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Itecounsel',
            'email' => 'admin@itecounsel.com',
            'password' => Hash::make('itec@aus/ban'),
            'isAdmin' => '1',
        ]);

        User::create([
            'name' => 'Quadque',
            'email' => 'admin@quadque.tech',
            'password' => Hash::make('quadque@2020'),
            'isAdmin' => '1',
        ]);
    }
}
