<?php

namespace Database\Seeders;

use App\Models\Laptop;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(LaptopTableSeeder::class);
       $this->call(IssuedTableSeeder::class);
       $this->call(SubmittedTableSeeder::class);
       
    }
}
