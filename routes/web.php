<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('welcome');
});
Route::get("/overview", function(){
    return view('membership/overview');
});
Route::get("/faq", function(){
    return view('membership/faq');
});
Route::get("/login", function(){
    return view("/login");
});
Route::get("/courses/{id}", [CoursesController::class, 'redirect']);
Route::get("logout", function(){
    if(session()->has('user')){
        session()->pull('user');
    };
    return redirect("/");
});
Route::get("/roadmap/1", function(){
    return view("html-css");
});
Route::get("/roadmap/2", function(){
    return view("js-basics");
});
Route::post("/", [LoginController::class, "userSignIn"]);
Route::post("/login", [LoginController::class, "userLogin"]);


