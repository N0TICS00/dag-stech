<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class CoursesController extends Controller
{
    public function redirect($id){
        if($id === "1"){
            return view("membership/courses/html-css");
        }
        else if($id === "2"){
            return view("membership/courses/js-basics");
        }
    }
}
