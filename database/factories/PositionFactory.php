<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'good_id'=>$this->faker->numberBetween(1,10),
            'machine_id'=>$this->faker->numberBetween(1,10),
            'code' => $this->faker->unique()->numberBetween(1000, 9999), // Генерация случайных чисел от 1000 до 9999
            'name'=>$this->faker->word(),
            'is_enabled'=>$this->faker->boolean(50),
            'is_available'=>$this->faker->boolean(50),
            'price'=>$this->faker->numberBetween(10,100),
            'stock'=>$this->faker->numberBetween(10,100),
            'capacity'=>$this->faker->numberBetween(10,100),
            'expiry_date'=>$this->faker->dateTimeThisDecade(),

        ];
    }
}
