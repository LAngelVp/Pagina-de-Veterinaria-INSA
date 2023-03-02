<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'nombre' => 'Taza',
            'descripcion' => 'Izzi pizzi',
            'foto'=>'https://cdn.pixabay.com/photo/2015/07/10/14/04/coffee-839233_960_720.jpg',
            'precio' => 30.99,
            'cantidad' => 100,
            'categoria' => 'Mercha'
        ]);

        DB::table('products')->insert([
            'nombre' => 'Playera',
            'descripcion' => 'Izzi pizzi',
            'foto'=>'https://cdn.pixabay.com/photo/2017/01/13/04/56/blank-1976334_960_720.png',
            'precio' => 30.99,
            'cantidad' => 100,
            'categoria' => 'Mercha'
        ]);
        //php artisan db:seed --class=ProductsSeeder
    }
}
