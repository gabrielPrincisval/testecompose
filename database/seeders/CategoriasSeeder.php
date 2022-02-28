<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorias;
class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorias::create([

            'nome' => 'Perifericos Gamers'



        ]);

        Categorias::create([
            'nome' => 'Perifericos para devs'


        ]);
    }
}
