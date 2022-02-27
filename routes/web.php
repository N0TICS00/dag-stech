<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/overview", function(){
    return view('membership/overview');
});
Route::get("/faq", function(){
    return view('membership/faq');
});

Route::get("/courses/{id}", [CoursesController::class, 'redirect']);

