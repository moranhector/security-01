<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Cano',
            'email' => 'cano@mail',
            'password' => bcrypt('12345678')
            ])->assignRole('Admin');

        User::create([
            'name' => 'Luis',
            'email' => 'luis@mail',
            'password' => bcrypt('12345678')
             ])->assignRole('Gerente');            

        User::create([
           'name' => 'Jorge',
           'email' => 'jorge@mail',
           'password' => bcrypt('12345678')
            ])->assignRole('Usuario');                            

        User::factory(3)->create();

    }
}


