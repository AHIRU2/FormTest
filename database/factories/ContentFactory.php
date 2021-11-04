<?php

namespace Database\Factories;

use App\Models\Content;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    protected $model = Content::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1, 2),
            'email' => $this->faker->safeEmail,
            'postcode' => substr_replace($this->faker->postcode, '-', 3, 0),
            // 'postcode' => $this->faker->postcode1() . '-' . $this->faker->postcode2(),
            // 'address' => $this->substr_replace($this->faker->address, '', 0, 8),
            'address' => $this->faker->address,
            'option' => $this->faker->realTextBetween(1, 120)
        ];
    }
}
