<?php

namespace Database\Seeders;

use App\Models\Notas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notas::create([
            'titulo' => 'NOTA 1',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 1'
        ]);
        Notas::create([
            'titulo' => 'NOTA 2',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 2'
        ]); Notas::create([
            'titulo' => 'NOTA 3',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 3'
        ]); Notas::create([
            'titulo' => 'NOTA 4',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 4'
        ]); Notas::create([
            'titulo' => 'NOTA 5',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 5'
        ]); Notas::create([
            'titulo' => 'NOTA 6',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 6'
        ]); Notas::create([
            'titulo' => 'NOTA 7',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 7'
        ]); Notas::create([
            'titulo' => 'NOTA 8',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 8'
        ]); Notas::create([
            'titulo' => 'NOTA 9',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 9'
        ]); Notas::create([
            'titulo' => 'NOTA 10',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 10'
        ]); Notas::create([
            'titulo' => 'NOTA 11',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 11'
        ]); Notas::create([
            'titulo' => 'NOTA 12',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 12'
        ]); Notas::create([
            'titulo' => 'NOTA 13',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 13'
        ]); Notas::create([
            'titulo' => 'NOTA 14',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 14'
        ]); Notas::create([
            'titulo' => 'NOTA 15',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 15'
        ]); Notas::create([
            'titulo' => 'NOTA 16',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 16'
        ]); Notas::create([
            'titulo' => 'NOTA 17',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 17'
        ]); Notas::create([
            'titulo' => 'NOTA 18',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 18'
        ]); Notas::create([
            'titulo' => 'NOTA 19',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 19'
        ]); Notas::create([
            'titulo' => 'NOTA 20',
            'texto' => 'ESTO ES UNA NOTA DE PRUEBA 20'
        ]);
    }
}
