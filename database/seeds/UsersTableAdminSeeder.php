<?php

use Illuminate\Database\Seeder;

class UsersTableAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'dkduhoc'.'@gmail.com',
            'isadmin' => 1,
            'password' => bcrypt('12345678'),
        ]);
    }
}
