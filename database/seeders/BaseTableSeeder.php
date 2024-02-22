<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
         * Данные таблицы поумолчанию
         **/
        \App\Models\BaseTableContent::create([
            'position' => 1,
            'interval' => '08:00-09:30'
        ]);
        \App\Models\BaseTableContent::create([
            'position' => 2,
            'interval' => '09:40-11:10'
        ]);
        \App\Models\BaseTableContent::create([
            'position' => 3,
            'interval' => '11:20-11:50'
        ]);
        \App\Models\BaseTableContent::create([
            'position' => 4,
            'interval' => '13:00-14:30'
        ]);
        \App\Models\BaseTableContent::create([
            'position' => 5,
            'interval' => '14:40-16:10'
        ]);
        \App\Models\BaseTableContent::create([
            'position' => 6,
            'interval' => '16:20-17:50'
        ]);
        \App\Models\BaseTableContent::create([
            'position' => 7,
            'interval' => '18:00-19:30'
        ]);
        \App\Models\BaseTableContent::create([
            'position' => 8,
            'interval' => '19:40-21:10'
        ]);
    }
}
