<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
DB::table('users')->insert([
    'name' => 'Shoron',
    'email' => 'Shoron@doe.com',
    'password' => Hash::make('12345')
   ]);

    }
}
