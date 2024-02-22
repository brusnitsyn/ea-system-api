<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BaseTableSeeder::class,
            BoardSeeder::class,
            RuleSeeder::class,
            UserSeeder::class,
        ]);
        /*
         * Типы оборудования
         **/
//        \App\Models\TypeOfAccessories::create([
//            'title' => 'Процессор'
//        ]);
//        \App\Models\TypeOfAccessories::create([
//            'title' => 'Видеокарта'
//        ]);
//        \App\Models\TypeOfAccessories::create([
//            'title' => 'Оперативная память'
//        ]);
//        \App\Models\TypeOfAccessories::create([
//            'title' => 'Жесткий диск'
//        ]);
//        \App\Models\TypeOfAccessories::create([
//            'title' => 'Чернильный картридж'
//        ]);
//        \App\Models\TypeOfAccessories::create([
//            'title' => 'Ролик'
//        ]);

        /*
         * Статусы оборудования
         **/
//        \App\Models\StatusAccessories::create([
//           'title' => 'Исправен'
//        ]);
//        \App\Models\StatusAccessories::create([
//           'title' => 'Требуется диагностика'
//        ]);
//        \App\Models\StatusAccessories::create([
//           'title' => 'Требуется замена'
//        ]);

        /*
         * Факультеты, кафедры и аудитории
         **/
//        \App\Models\Faculty::create([
//            'title' => 'Физико-математический факультет',
//        ]);
//        \App\Models\Faculty::create([
//            'title' => 'Естественно-географический факультет',
//        ]);

//        \App\Models\Department::create([
//            'title' => 'Кафедра физического и математического образования',
//            'faculty_id' => 1
//        ]);
//        \App\Models\Department::create([
//            'title' => 'Кафедра информатики и методики преподавания информатики',
//            'faculty_id' => 1
//        ]);
//        \App\Models\Department::create([
//            'title' => 'Кафедра географии',
//            'faculty_id' => 2
//        ]);
//        \App\Models\Department::create([
//            'title' => 'Кафедра химии',
//            'faculty_id' => 2
//        ]);
//
//        \App\Models\Audience::create([
//            'title' => 'Аудитория 114',
//            'department_id' => 1
//        ]);
//        \App\Models\Audience::create([
//            'title' => 'Аудитория 229',
//            'department_id' => 2
//        ]);
//        \App\Models\Audience::create([
//            'title' => 'Аудитория 230',
//            'department_id' => 2
//        ]);
//        \App\Models\Audience::create([
//            'title' => 'Аудитория 338 А',
//            'department_id' => 3
//        ]);
//        \App\Models\Audience::create([
//            'title' => 'Аудитория 213 А',
//            'department_id' => 4
//        ]);

        /*
         * Корпуса
         **/
//        \App\Models\Corpus::create([
//            'name' => 'Центральный корпус'
//        ]);
//        \App\Models\Corpus::create([
//            'name' => 'Корпус А'
//        ]);

    }
}
