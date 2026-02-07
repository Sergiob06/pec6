<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titol'=>$this->faker->sentence(),
            'contingut'=>$this->faker->text(),
            'usuari_id' => \App\Models\Usuari::inRandomOrder()->first()->id,
        ];
    }
}
