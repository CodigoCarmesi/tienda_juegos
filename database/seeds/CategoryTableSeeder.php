<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
                'name'=>'video juegos',
                'slug'=>'video-juego',
                'description'=>'Juego de consola',
                'color'=>'#440022'
            ],
            [
                'name'=>'accesorios',
                'slug'=>'accesorio',
                'description'=>'accesorio para consola',
                'color'=>'#445500'
            ],
            [
                'name'=>'consola de juegos',
                'slug'=>'consola-de-juegos',
                'description'=>'consola de juegos para el hogar',
                'color'=>'#446600'
            ]
		);

		Category::insert($data);
    }
}
