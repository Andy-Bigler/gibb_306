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
            'email' => 'andy.bigler@iet-gibb.ch',
            'password' => bcrypt('gibbiX12345')
        ]);

        User::create([
            'name' => 'Alejandro Probst',
            'email' => 'alejandro.probst@iet-gibb.ch',
            'password' => bcrypt('gibbiX12345')
        ]);

        User::create([
            'name' => 'Nicolo Lüscher',
            'email' => 'nicolo.luescher@iet-gibb.ch',
            'password' => bcrypt('gibbiX12345')
        ]);

        User::create([
            'name' => 'Jannik Hug',
            'email' => 'jannik.hug@iet-gibb.ch',
            'password' => bcrypt('gibbiX12345')
        ]);

        User::create([
            'name' => 'Tom Diggelmann',
            'email' => 'tom.diggelmann@iet-gibb.ch',
            'password' => bcrypt('gibbiX12345')
        ]);
    }
}
