<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function ShowAllUsers(){
        $profiles = Profile::all();
        $courses = Course::all(); 
        return view('user-course',['profiles'=>$profiles,'courses'=>$courses]); 
    }

    
}
