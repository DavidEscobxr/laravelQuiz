<?php

namespace Database\Seeders;

use App\Models\Cuartel;
use Illuminate\Database\Seeder;

class CuartelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cuartel::factory(50)->create();
    }
}
