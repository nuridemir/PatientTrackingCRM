<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'slug' =>  Str::slug($this->faker->firstName() . $this->faker->lastName()),
            'identification_number' => $this->faker->numerify('##############'),
            'age' => $this->faker->numberBetween(18, 80),
            'birthday' => $this->faker->date(),
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'notes' => $this->faker->sentence(2),
            'avatar' => $this->faker->imageUrl(),
            'relative' => $this->faker->name,
            'relative_phone' => $this->faker->phoneNumber,
            'gender' => $this->faker->randomElement(['male', 'female', 'undetermined']),
            'marital_status' => $this->faker->randomElement(['married', 'single', 'undetermined']),
            'customer_weight' => $this->faker->numberBetween(50, 150),
            'weight' => $this->faker->numberBetween(50, 150),
        ];
    }
}
