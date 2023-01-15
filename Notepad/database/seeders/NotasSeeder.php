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
            'titulo' => 'Pendiente Akiro',
            'texto' => 'PIERCING BAÑADO EN ORO CON ARO DE CIRCONITAS Y COLGANTE RECTANGULAR DE PIEDRA AZUL OSCURO'
        ]);
        Notas::create([
            'titulo' => 'Anillo Spark',
            'texto' => 'ANILLO DE 4 CIRCONITAS BLANCAS BRILLANTES EN PLATA CON BAÑO DE ORO'
        ]);
        Notas::create([
            'titulo' => 'Collar Sentiment',
            'texto' => 'COLLAR BAÑADO EN ORO CON COLGANTE HEXAGONAL CON CIRCONITAS BLANCAS'
        ]);
    }
}
