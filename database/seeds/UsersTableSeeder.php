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
//        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//
//        DB::table('users')->truncate();
//
//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // create user
        $user = App\User::create([
            'name'     => 'Atul Traders Admin',
            'email'    => 'admin@atultraders.com.np',
            'password' => bcrypt('admin@atultraders')
        ]);


    }
}
