<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'rudyekoprasetya@mail.com'],
            [
                'nama' => 'Rudy Eko',
                'password' => Hash::make('123456'),
                'foto' => '',
                'role' => 'admin',
            ]
        );
    }
}