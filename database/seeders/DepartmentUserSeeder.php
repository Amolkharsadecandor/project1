<?php
 
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// extra added lines in seeder 

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
//
class DepartmentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // use to mutiple value with mutiple column  list //
        // DB::table('users')->insert([
        //     ['name'=>'abcd','email' => 'picard@example.com', 'password' => 'abcd'],
        //     ['name'=>'asdf','email' => 'aasdf@example.com', 'password' => 'asdf'],
           
        // ]);
    }
}

// seeder  //


 
DB::table('users')->insert([
    'name' => Str::random(10),
    'email' => Str::random(10).'@gmail.com',
    'password' => Hash::make('password'),
]);

// use to mutiple value with mutiple column  list //
DB::table('users')->insert([
    ['name'=>'abcd','email' => 'picard@example.com', 'password' => 'abcd'],
    ['name'=>'asdf','email' => 'aasdf@example.com', 'password' => 'asdf'],
   
]);

