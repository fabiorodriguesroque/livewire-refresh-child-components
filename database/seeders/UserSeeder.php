<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin
        User::factory()->state([
            'name'  => 'Tester',
            'email' => 'tester@livewireapp.test',
            
        ])->create();

        // Create users 
        User::factory()->count(20)->create();
    }
}
