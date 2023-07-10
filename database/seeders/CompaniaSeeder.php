<?php

namespace Database\Seeders;

use App\Models\Compania;
use Illuminate\Database\Seeder;

class CompaniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Compania::factory(50)->create();
    }
}
