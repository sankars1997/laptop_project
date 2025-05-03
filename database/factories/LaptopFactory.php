
<?php

namespace Database\Factories;
use App\Models\Laptop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laptop>
 */
class LaptopFactory extends Factory
{
    protected $model = Laptop::class;

    public function definition(): array
    {
        return [
            'Serial_no' => $this->faker->unique()->numerify('#####'),
            'specifications' => $this->faker->sentence(),
        ];
    }
}
