<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Fathesshop',
            'username' => 'fathesshop',
            'password' => bcrypt('Fathesshop24'),
            'email' => 'fathesshop@gmail.com',
        ]);
    }
}
