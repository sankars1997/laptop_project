<?php

namespace Database\Factories;
use App\Models\Issued;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class IssuedFactory extends Factory
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
       'issued_date'=>$this->faker->date($format='Y-m-d',$max='now'),
   
    'college_name' => $this->faker->sentence(),
        ];
    }
}
