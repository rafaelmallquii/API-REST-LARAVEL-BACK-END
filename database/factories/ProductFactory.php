<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'description' => $this->faker->text,
            'image' => "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRIZ-zcvTn4xC4qFWWY-1qP5JzBQUDdNcQwbaqxDmePLqWERKNyew3s1nqJwuCFkyCax5-1O0oRvH9OCbIFjdg4vh6vxsL4ILE3ttsXUCnQinbX-w_16L-9sg&usqp=CAE"
                ];
    }
}
