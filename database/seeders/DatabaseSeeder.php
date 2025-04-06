<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Docente;
use App\Models\Seccion;
use App\Models\Alumno;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Docente::factory(10)
            ->has(Seccion::factory()->count(3), 'secciones')
            ->create();

        Alumno::factory(10)->create();
    }
}
