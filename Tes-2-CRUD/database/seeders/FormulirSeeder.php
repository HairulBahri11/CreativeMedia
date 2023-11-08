<?php

namespace Database\Seeders;

use App\Models\Formulir;
use Illuminate\Database\Seeder;

class FormulirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formulir::factory(10)->create();
    }
}
