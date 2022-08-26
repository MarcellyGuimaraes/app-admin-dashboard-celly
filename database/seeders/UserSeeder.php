<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $adnin = User::create([
            'name' => 'admin',
            'email' => 'admin@adminseeder.com',
            'password' => bcrypt('admin'),
        ]);
        $adnin->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
        ]);
        $user->assignRole('user');
    }
}
