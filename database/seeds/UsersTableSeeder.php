<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => '1',
                'name' => 'Muhammad Alfiyan S',
                'email' => 'alfiyan@example.com',
                'password' => Hash::make('alfiyan123'),
                'remember_token' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '2',
                'name' => 'Venny Diski Habsari',
                'email' => 'venny@example.com',
                'password' => Hash::make('venny123'),
                'remember_token' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '3',
                'name' => 'Fadhil Yori Hibatullah',
                'email' => 'fadhilyori@example.com',
                'password' => Hash::make('fadhil123'),
                'remember_token' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '4',
                'name' => 'Andi Suprianto',
                'email' => 'andisa@example.com',
                'password' => Hash::make('andi123'),
                'remember_token' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '5',
                'name' => 'Ikbar Maulana',
                'email' => 'ikbar@example.com',
                'password' => Hash::make('ikbar123'),
                'remember_token' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        User::query()->insert($users);
    }
}
