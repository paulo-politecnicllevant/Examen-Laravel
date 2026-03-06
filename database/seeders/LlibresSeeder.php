<?php

namespace Database\Seeders;

use App\Models\Llibre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LlibresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Llibre::create(['titol' => 'El Quijote']);
        Llibre::create(['titol' => 'Moby Dick']);
    }
}
