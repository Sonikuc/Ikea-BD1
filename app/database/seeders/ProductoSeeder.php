<?php

namespace Database\Seeders;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$prod = new Producto;
        $prod->name = 'Cargador inalambrico';
        $prod->nsueco = 'LIVBOJ';
        $prod->montaje = false;
        $prod->tipo = 'sim';
        $prod->caract = 'Requiere un tratamiento de residuos especial';
        $prod->instrucc = 'Antes de usarlo, limpielo y conectelo a la corriente. Nunca sumergir en agua';
        $prod->descrip = 'Cargador fino que puedas llevar en el bolsillo';
        $prod->save();*/

        Producto::factory(8)->create();
    }
}
