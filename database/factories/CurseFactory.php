<?php

namespace Database\Factories;

use App\Models\Curse;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curse>
 */
class CurseFactory extends Factory
{

    protected $model = Curse::class; 

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     * 
     */

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}
