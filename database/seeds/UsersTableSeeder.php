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
        DB::table('users')->insert([
            'full_name'  => 'Isam Samsul Arip',
            'email'      => 'aripisam85@gmail.com',
            'username'   => 'admin',
            'password'   => bcrypt('admin'),
            'avatar'     => '898192462.png'
        ]);
    }
}
