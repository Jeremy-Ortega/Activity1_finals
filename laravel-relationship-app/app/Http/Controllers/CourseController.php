<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function ShowAllUsersInCourse(Request $request,Course $course){
        $users = $course->users;

        return view('course-users',['users'=>$users,'course'=>$course]);
    }
}
