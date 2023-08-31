<?php

namespace Database\Factories;

use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuardianFactory extends Factory
{
    protected $model = Guardian::class;

    public function definition()
    {
        return [
            'guardian_fullName_en' => $this->faker->name,
            'guardian_fullName_ar' => $this->faker->name,
            'rel_to_en' => $this->faker->word,
            'rel_to_ar' => $this->faker->word,
            'guardian_id_no' => $this->faker->unique()->randomNumber(),
            'guardian_martial_status' => $this->faker->randomElement(['Single', 'Married', 'Divorced']),
            'work' => $this->faker->word,
            'edu_level' => $this->faker->word,
            'monthly_salary' => $this->faker->randomFloat(2, 1000, 5000),
            'child_id' => 1,
            'address_details' => $this->faker->address,
            'governorate_id' => 19,
            'area_id' => 1,
            'email' => $this->faker->unique()->safeEmail,
            'phone_no' => $this->faker->phoneNumber,
            'mobile_1' => $this->faker->phoneNumber,
            'mobile_2' => $this->faker->phoneNumber,
            'child_code' => $this->faker->unique()->uuid,
        ];
    }
}
