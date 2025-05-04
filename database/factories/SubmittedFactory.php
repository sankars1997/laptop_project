<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Submitted;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SubmittedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Serial_no'=>$this->faker->unique()->numerify('#####'),
    'specifications' => $this->faker->sentence(),
       'returned_date'=>$this->faker->date($format='Y-m-d',$max='now'),
        ];
    }
}
