<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               // used after migrating users and courses
               $users = User::all();
               $courses = Course::all();
       
               // For distribution of course
               foreach ($users as $user) {
                   $user->courses()->attach($courses->unique()->random());
               }
    }
}
