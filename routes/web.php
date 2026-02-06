<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});
Route::get("/home",function(){
    return view("home");
})->name("home");

Route::get("/about",function(){
    return view("about");
})->name("about");

Route::get("/Blog",function(){
    return view("blog");
})->name("blog");

Route::get("/contact",function(){
    return view("contact");
})->name("contact");

// course route
Route::get("/course/create",function(){
    return view("course.create");
})->name("course_create");

Route::get("/course/list",function(){
    $courses= Course::all();
    return view("course.list",compact("courses"));
})->name("course_list");

// Route::post("/course/store",function(Request $request){
//     return $request;
//     // return view("course.store");
// })->name("course_store");

// Get,post
//http methods
//get-read
//post-create,store,read
//put/patch--update
//delete





// Route::get("/", [UserController::class, "welcome"])->name("welcome");

Route::post("/course/store",function(Request $request){
    // return $request;
    $course = new Course();
    $course->name = $request->name;
    $course->price = $request->price;
    $course->duration = $request->duration;
    $course->description = $request->description;
    $course->save();
    toast("Course saved", "sucessful");
    return redirect()->back();
})->name("course_store");

Route::get("/course/edit/{id}", function($id){
    $course = Course::find($id);
    return view("course.edit",compact('course'));
})->name("course_edit");

Route::delete("/course/delete/{id}", function($id){
    $course = Course::find($id);
    $course->delete();
    toast("Course deleted", "sucess");
    return redirect()->back();
})->name("course_delete");


//function(Request $request) Request(request http) brings all the data comes from form /course/create and $request is a vairable to put the data on it
Route::patch("/course/update/{id}",function(Request $request,$id){
    // return $request;
    $course = course::find($id);
    $course->name = $request->name;
    $course->price = $request->price;
    $course->duration = $request->duration;
    $course->description = $request->description;
    $course->save();
    toast("Course updated sucessful");
    return redirect()->route('course_create');
})->name("course_update");

// Extract the data with the id number










