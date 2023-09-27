<?php

namespace Database\Factories;

use App\Models\producto;

use Illuminate\Database\Eloquent\Factories\Factory;




class ProductoFactory extends Factory
{

    protected $model= Producto::class ;

    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->word(7),
            'cantidad'=>$this->faker->randomNumber(2),
            'precio'=>$this->faker->randomNumber(3),
            'categoria'=>$this->faker->randomElement(['frutas','abarrotes','verduras'])
        ];
    }
}
