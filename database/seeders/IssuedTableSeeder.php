<?php

namespace Database\Seeders;
use App\Models\Issued;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IssuedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Issued::factory()->count(30)->create();
    }
}
