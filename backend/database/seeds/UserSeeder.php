<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'ami', 'email' => 'ami@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('ami0000')]);
        User::create(['name' => 'hana', 'email' => 'hana@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('hana0000')]);
        User::create(['name' => 'kento', 'email' => 'kento@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('kento0000')]);
    }
}
