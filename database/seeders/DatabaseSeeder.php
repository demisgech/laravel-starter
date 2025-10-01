<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
//
//        User::factory()->create([
//            'first_name' => 'Gech',
//            'last_name' => 'John',
//            'email' => 'john.gech@domain.com',
//        ]);

//        Job::factory(200)->create();
//        $this->call(UserSeeder::class);
        $this->call(JobSeeder::class);
//        $this->call(EmployerSeeder::class);
    }
}
