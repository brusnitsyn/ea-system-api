<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
         * Права
         **/
        \App\Models\Rule::create([
            'slug' => 'admin',
            'title' => 'Администратор'
        ]);
//        \App\Models\Rule::create([
//            'slug' => 'teacher',
//            'title' => 'Преподаватель'
//        ]);
        \App\Models\Rule::create([
            'slug' => 'worker',
            'title' => 'Сотрудник'
        ]);
    }
}
