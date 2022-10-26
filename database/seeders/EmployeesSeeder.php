<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Employees::create([
            'firstName' => 'Jimmy',
            'lastName' => 'Jhons',
            'age' => 25
        ]);

        \App\Models\Employees::create([
            'firstName' => 'Amalia',
            'lastName' => 'Chalter',
            'age' => 28
        ]);

        \App\Models\Employees::create([
            'firstName' => 'Alexander',
            'lastName' => 'Sumargo',
            'age' => 22
        ]);
    }
}

