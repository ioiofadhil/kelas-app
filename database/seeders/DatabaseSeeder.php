<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $password = Hash::make('test1234');

        \App\Models\User::create([
            'username' => 'admin',
            'phone' => '081384934615',
            'email' => 'giofadhil.ahmad@gmail.com',
            'password' => $password,
        ]);

        \App\Models\User::factory(100)->create();
    }
}
