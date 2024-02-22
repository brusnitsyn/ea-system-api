<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
         * Учетные записи
         **/
        \App\Models\User::create([
            'name' => 'Татьяна Исакова',
            'login' => 'admin',
            'password' => Hash::make('admin'),
            'rule_id' => 1
        ]);
    }
}
