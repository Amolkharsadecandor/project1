<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert([
          
            ['name'=>'IT-Software'],
           
            ['name'=>'Marketing'],
            ['name'=>'HR'],
            ['name'=>'IT-Hardware'],
            ['name'=>'Rearch-And-Developement'],
            ['name'=>'Calling'],
            ['name'=>'QA'],
            ['name'=>'MIS'],
        ]);
    }
}
