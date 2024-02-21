<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableAnotherFillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TableAnotherFill::create([
            'name' => 'Институт Конфуция',
            'icon' => 'i-mdi-circle',
            'icon_color' => '#03afef',
            'color' => null
        ]);
        \App\Models\TableAnotherFill::create([
            'name' => 'Лицей',
            'icon' => 'i-mdi-panorama-fisheye',
            'icon_color' => '#000000',
            'color' => null
        ]);
        \App\Models\TableAnotherFill::create([
            'name' => 'Потоковые лекции',
            'icon' => 'i-mdi-star',
            'icon_color' => '#fdbf07',
            'color' => null
        ]);
        \App\Models\TableAnotherFill::create([
            'name' => 'Факультативы',
            'icon' => 'i-mdi-rhombus',
            'icon_color' => '#9b0098',
            'color' => null
        ]);
        \App\Models\TableAnotherFill::create([
            'name' => 'Прочее',
            'icon' => 'i-mdi-decagram',
            'icon_color' => '#96ff00',
            'color' => null
        ]);
        \App\Models\TableAnotherFill::create([
            'name' => 'Закрыто',
            'icon' => 'i-mdi-close-thick',
            'icon_color' => '#fb0001',
            'color' => null
        ]);
        \App\Models\TableAnotherFill::create([
            'name' => 'Свободно',
            'icon' => null,
            'icon_color' => null,
            'color' => null
        ]);
    }
}
