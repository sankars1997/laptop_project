<?php

namespace Database\Seeders;
use App\Models\Laptop;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaptopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
       Laptop::factory()->count(30)->create();
    }
}
