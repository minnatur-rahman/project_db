<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\studean;
use Illuminate\Support\Facades\File;

class StudeanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = File::get(path:'database/json/students.json');

        $students = collect(json_decode($json));

        $students->each(function($student){
           studean::create([
               'name' => $student->name,
               'email' => $student->email
           ]);
        });




    }
}
