<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert([
            'titulo'=>'Tarea1',
            'descripcion'=>'Descripcion de la tarea1',
        ]);
        DB::table('tareas')->insert([
            'titulo'=>'Tarea2',
            'descripcion'=>'Descripcion de la tarea2',
        ]);
        DB::table('tareas')->insert([
            'titulo'=>'Tarea3',
            'descripcion'=>'Descripcion de la tarea3',
        ]);
    }
}
