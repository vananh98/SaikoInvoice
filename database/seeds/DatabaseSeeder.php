<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert(
            ['name' => 'saiko', 'email' => 'saiko@gmail.com', 'password' => Hash::make('12345')],
            ['name' => 'anhmv', 'email' => 'anhcdcn98@gmail.com', 'password' => Hash::make('12345')],
        );
    }
}
