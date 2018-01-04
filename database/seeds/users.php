<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $username='sonminh18';
        $password='ntms123!@#';
        DB::table('users')->insert([
            'name' => $username,
            'email' => $username.'@gmail.com',
            'password' => bcrypt($password),
        ]);

    }
}
