<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
            'name' => "Admin",
            'email' => "Admin@email.com",
            'password' => Hash::make("admin"),
        ]);
    
    }
}
