<?php

namespace Database\Factories;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Producto::class;
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'nsueco' => $this->faker->sentence(),
            'montaje' => $this->faker->boolean(),
            'tipo' => $this->faker->randomElement(['sim','com']),
            'caract' => $this->faker->sentence(),
            'instrucc' => $this->faker->sentence(),
            'descrip' => $this->faker->sentence()
        ];
    }
}
