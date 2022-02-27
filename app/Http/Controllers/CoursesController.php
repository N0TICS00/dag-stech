<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
