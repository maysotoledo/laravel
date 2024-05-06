<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Mayso Toledo',
                'login' => 'mayso',
                'email' => 'mayso.toledo@gmail.com',
                'rule' => 'admin',
                'status' => 'ativo',
                'password' => bcrypt('inseto')
            ],
            [
                'name' => 'Vendedor',
                'login' => 'vendedor',
                'email' => 'vendedor@email.com',
                'rule' => 'vendor',
                'status' => 'ativo',
                'password' => bcrypt('vendedor')
            ],
            [
                'name' => 'Cliente',
                'login' => 'cliente',
                'email' => 'cliente@email.com',
                'rule' => 'user',
                'status' => 'ativo',
                'password' => bcrypt('cliente')
            ]
            ]);
    }
}
