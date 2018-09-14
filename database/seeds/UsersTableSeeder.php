<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
          'name' => 'Carlos Pineda',
          'email' => 'carlos@gmail.com',
          'password' => bcrypt('1234')
        ]);
        factory(User::class)->create([
          'name' => 'Orlando Melo',
          'email' => 'orlando@gmail.com',
          'password' => bcrypt('1234')
        ]);
        factory(User::class)->create([
          'name' => 'Mariana Almanzar',
          'email' => 'mariana@gmail.com',
          'password' => bcrypt('1234')
        ]);
    }
}
