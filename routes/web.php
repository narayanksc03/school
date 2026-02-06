<?php

use App\Http\Controllers\AdmissionContriller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get("/", );

Route::get("/home",[PageController::class,"home"] )->name("home");

Route::get("/about",[PageController::class,"about"] )->name("about");

Route::get("/Blog",[PageController::class,"blog"])->name("blog");

Route::get("/contact",[PageController::class,"contact"])->name("contact");

// course route
Route::get("/course/create",[CourseController::class,"create"])->name("course_create");

Route::get("/course/list",[CourseController::class,"list"])->name("course_list");
// Get,post
//http methods
//get-read
//post-create,store,read
//put/patch--update
//delete





// Route::get("/", [UserController::class, "welcome"])->name("welcome");

Route::post("/course/store",[CourseController::class,"store"])->name("course_store");

Route::get("/course/edit/{id}",[CourseController::class,"edit"] )->name("course_edit");

Route::delete("/course/delete/{id}",[CourseController::class,"delete"] )->name("course_delete");


//function(Request $request) Request(request http) brings all the data comes from form /course/create and $request is a vairable to put the data on it
Route::patch("/course/update/{id}",[CourseController::class,"update"])->name("course_update");

// Extract the data with the id number



//Adminssion Route
Route::resource("/admission",AdmissionContriller::class)->names('admission');






