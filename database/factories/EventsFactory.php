<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventsFactory extends Factory
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
            'machine_id'=>$this->faker->numberBetween(1,10),
            'local_id'=>$this->faker->randomDigit(),
            'datetime'=>$this->faker->dateTimeThisDecade(),
            'type'=>$this->faker->randomElement(['error','system','collection','user','sale']),
            'message'=>$this->faker->paragraph()

        ];
    }
}
