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
        User::create([
            'name' => 'Andy Bigler',
            'email' => 'andy.bigler@besonet.ch',
            'password' => bcrypt('gibbiX12345')
        ]);

        User::create([
            'name' => 'Hans Peter',
            'email' => 'hans.peter@gmail.com',
            'password' => bcrypt('gibbiX12345')
        ]);
    }
}
