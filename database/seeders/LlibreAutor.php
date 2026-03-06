<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Llibre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LlibreAutor extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $llibre1 = Llibre::firstWhere('titol', 'El Quijote');
        $autor1 = Autor::firstWhere('name', 'Miguel de Cervantes');
        $llibre1->autors()->attach($autor1->id);

        $llibre2 = Llibre::firstWhere('titol', 'Moby Dick');
        $autor2 = Autor::firstWhere('name', 'Unamuno');
        $llibre2->autors()->attach($autor2->id);
    }
}
