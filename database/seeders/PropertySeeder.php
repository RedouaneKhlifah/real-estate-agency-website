<?php

namespace Database\Seeders;

use App\Models\property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        property::factory()->count(10)->create();
    }
}
