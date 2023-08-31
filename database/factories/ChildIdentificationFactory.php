<?php

namespace Database\Factories;

use App\Models\ChildIdentification;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChildIdentificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = ChildIdentification::class;

    public function definition()
    {
        return [
            'child_code' => $this->faker->unique()->numberBetween(1000, 9999),
            'child_fullName_en' => $this->faker->name,
            'child_fullName_ar' => $this->faker->name,
            'child_id_no' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'category' => $this->faker->randomElement(['Orphan', 'Needy', 'Special Needs']),
            'birth_date' => $this->faker->date(),
            'mother_fullName_en' => $this->faker->name,
            'mother_fullName_ar' => $this->faker->name,
            'mother_id_no' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'mother_martial_status' => $this->faker->randomElement(['Divorced', 'Married', 'Widow', 'Abandon']),
            'father_fullName_en' => $this->faker->name,
            'father_fullName_ar' => $this->faker->name,
            'father_id_no' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'death_date' => $this->faker->optional()->date(),
            'has_disability' => $this->faker->boolean,
            'disability_type' => $this->faker->optional()->word,
            'sponsorship_category' => $this->faker->randomElement(['category1', 'category2', 'category3']),
            'scale_of_poverty' => $this->faker->randomElement(['VERY POOR', 'SEVERE', 'POOR']),
            'sr_id' => 1 //$this->faker->numberBetween(1, 10), // Adjust the range as needed
        ];
    }
}
