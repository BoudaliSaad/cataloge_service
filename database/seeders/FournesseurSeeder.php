<?php

namespace Database\Seeders;

use App\Models\Fournisseurs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FournesseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fournisseurs::factory()->count(5)->create();
    }
}
