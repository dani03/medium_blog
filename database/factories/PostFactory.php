<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->title();
        return [
            'title' => $title,
            'image' => fake()->imageUrl(),
            'slug' => Str::slug($title),
            'content' => fake()->paragraph(3),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'published_at' => fake()->optional()->dateTime(),

        ];
    }
}
