<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Customer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Nuri Demir',
            'email' => 'admin@admin',
            'password' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Bilgehan Kilic',
            'email' => 'admin1@admin',
            'password' => 'admin1'
        ]);


        $this->call([
            CustomerSeeder::class,
            AppointmentSeeder::class,
        ]);
    }
}
