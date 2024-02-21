<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

        /*
         * Учетные записи
         **/
        \App\Models\User::create([
            'name' => 'Татьяна Исакова',
            'login' => 'admin',
            'password' => Hash::make('admin'),
            'rule_id' => 1
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
