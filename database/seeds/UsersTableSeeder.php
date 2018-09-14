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
          'name' => 'Joe Doe',
          'email' => 'joedoe@gmail.com',
          'password' => bcrypt('1234')
        ]);
        factory(User::class)->create([
          'name' => 'Jane Doe',
          'email' => 'janedoe@gmail.com',
          'password' => bcrypt('1234')
        ]);
        factory(User::class)->create([
          'name' => 'Jam Doe',
          'email' => 'jamdoe@gmail.com',
          'password' => bcrypt('1234')
        ]);
    }
}
