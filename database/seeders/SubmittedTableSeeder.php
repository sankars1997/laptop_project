<?php

namespace Database\Seeders;
use App\Models\Submitted;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmittedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Submitted::factory()->count(30)->create();
    }
}
