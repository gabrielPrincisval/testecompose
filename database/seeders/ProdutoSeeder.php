<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome'   =>'Teclado',
            'Valor'  => 150
        ]);

        Produto::create([
            'nome'   =>'Mouse',
            'Valor'  => 250
        ]);


        Produto::create([
            'nome'   =>'Gabinete',
            'Valor'  => 350
        ]);


        Produto::create([
            'nome'   =>'Headset',
            'Valor'  => 250
        ]);
    
    }
}
