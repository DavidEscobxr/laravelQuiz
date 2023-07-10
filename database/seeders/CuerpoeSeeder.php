<?php

namespace Database\Seeders;

use App\Models\Cuerpoe;
use Illuminate\Database\Seeder;

class CuerpoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cuerpoe::factory(50)->create();
    }
}
