<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Comentari;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentari>
 */
class ComentariFactory extends Factory
{

    protected $model = Comentari::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'contingut' => $this->faker->text(),
        'usuari_id' => \App\Models\Usuari::inRandomOrder()->first()->id,
        ];
    }
}
