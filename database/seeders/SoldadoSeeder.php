<?php

namespace Database\Seeders;

use App\Models\Soldado;
use Illuminate\Database\Seeder;

class SoldadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Soldado::factory(50)->create();
    }
}
