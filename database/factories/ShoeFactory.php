<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ShoeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'company'=>$this->faker->company(),
            'colors'=>'Black,White,Green',
            'email'=>$this->faker->companyEmail(),
            'description'=>$this->faker->paragraph(5)
        ];
    }
}
