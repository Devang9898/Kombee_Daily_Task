<?php

namespace Database\Factories;

use App\Models\Tourist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TouristFactory extends Factory
{
    protected $model = Tourist::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'dob' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'country' => $this->faker->country,
            'preferences' => implode(',', $this->faker->randomElements(['beaches', 'mountains', 'cities', 'adventures'], 2)),
        ];
    }
}
