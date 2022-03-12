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
            'categoria_id'  => 1,
            'nome'          =>'Teclado',
            'Valor'         => 150
        ]);

        Produto::create([
            'categoria_id'  => 2,
            'nome'   =>'Mouse',
            'Valor'  => 250
        ]);


        Produto::create([
            'categoria_id'  => 3,
            'nome'   =>'Gabinete',
            'Valor'  => 350
        ]);
    }
}
