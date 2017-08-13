<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        User::create([
            'name' => 'Hatibu Mungia',
            'email' => 'hatibumungia@gmail.com',
            'password' => bcrypt('secret'),
            'is_admin' => true,
            ]);

        User::create([
            'name' => 'Normal User',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('secret'),
            'is_admin' => false,
            ]);        
    }
}
