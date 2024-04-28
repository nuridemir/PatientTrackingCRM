<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'complaint' => $this->faker->sentence(2),
            'slug' =>  Str::slug($this->faker->sentence(2)),
            'notes' => $this->faker->paragraph,
            'appointment_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'amount' => $this->faker->randomFloat(2, 10, 500),
            'status' => $this->faker->randomElement(['waiting', 'cancelled', 'complete']),
            'weight' => $this->faker->numberBetween(50, 150),
        ];
    }
}
