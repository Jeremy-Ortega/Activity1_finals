<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function ShowUserProfile(Request $request,User $user){
        $profile = $user->userProfile; 
        $courses = $user->courses;

        return view('profile',['profile'=>$profile,'courses'=>$courses,'user'=>$user]);
        
    }
}
