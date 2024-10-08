<?php

namespace Modules\Accounts\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Accounts\Entities\Tax::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'percentage' => $this->faker->numberBetween(0,100),
            'status' => $this->faker->randomElement(['active','inactive'])
        ];
    }
}

