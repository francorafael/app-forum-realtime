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
        factory(\App\Models\User::class, 1)->create([
            'name'  => 'Rafael Santos',
            'email' =>  'rafael@joyaweb.com.br',
            'password'  => bcrypt('123456')
        ]);

        //factory(\App\Models\User::class, 50)->create();

    }
}
