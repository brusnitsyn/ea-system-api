<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BoardSize;
use App\Models\BoardType;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BoardSize::create([
            'name' => 'большая'
        ]);
        BoardSize::create([
            'name' => 'средняя'
        ]);
        BoardSize::create([
            'name' => 'маленькая'
        ]);

        BoardType::create([
            'name' => 'меловая'
        ]);
        BoardType::create([
            'name' => 'маркерная'
        ]);
    }
}
