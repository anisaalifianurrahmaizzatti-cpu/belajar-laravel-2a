<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $oldEmail = 'rudyekoprasetya@mail.com';
        $newEmail = 'anisaalifianurrahmaizzatti@gmail.com';

        $user = DB::table('users')->where('email', $oldEmail)->first();

        if ($user) {
            DB::table('users')
                ->where('email', $oldEmail)
                ->update([
                    'email' => $newEmail,
                    'nama' => 'Anisa Alifia Nur',
                ]);
        } else {
            DB::table('users')->updateOrInsert(
                ['email' => $newEmail],
                [
                    'nama' => 'Anisa Alifia Nur',
                    'password' => Hash::make('123456'),
                    'foto' => '',
                    'role' => 'admin',
                ]
            );
        }
    }
}