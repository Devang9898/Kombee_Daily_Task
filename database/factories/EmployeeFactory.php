<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */



use App\Models\Employee;

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'blood_group' => $this->faker->randomElement(['A+', 'B+', 'O+', 'AB+']),
            'location' => $this->faker->city(),
            'hobbies' => json_encode($this->faker->randomElements(['Reading', 'Traveling', 'Sports', 'Music'], 2)),
        ];
    }
}
