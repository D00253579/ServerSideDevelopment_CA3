<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            ['name' => 'Administrator','email' => 'a@a.com','password' => Hash::make('123!"£QWEqwe'),'isAdmin'=> 1],
            ['name' => 'User', 'email' => 'b@b.com', 'password' => Hash::make('123!"£QWEqwe'),'isAdmin'=>0]
        ]);
    }
}
