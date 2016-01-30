<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
				'name' 		=> 'Andrew', 
				'last_name' => 'nunez', 
				'email' 	=> 'richard.andres93@gmail.com', 
				'user' 		=> 'andrews',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'Calle Falsa 123, Springfield',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Camilo', 
				'last_name' => 'Floss', 
				'email' 	=> 'camilo@correo.com', 
				'user' 		=> 'Flow',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Av.SiempreViva, Springfield',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
