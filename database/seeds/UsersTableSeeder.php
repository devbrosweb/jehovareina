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
          'slug' => 'carlos-pineda',
          'email' => 'carlos@gmail.com',
          'password' => bcrypt('1234')
        ]);
        factory(User::class)->create([
          'name' => 'Orlando Melo',
          'slug' => 'orlando-melo',
          'email' => 'orlando@gmail.com',
          'password' => bcrypt('1234')
        ]);
        factory(User::class)->create([
          'name' => 'Mariana Almanzar',
          'slug' => 'mariana-almanzar',
          'email' => 'mariana@gmail.com',
          'password' => bcrypt('1234')
        ]);
    }
}
