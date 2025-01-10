<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author_id' => Author::factory(),
            'publisher_id' => Publisher::factory(),
        ];
    }
}