<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('home');
})->name('home');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/Blog',function(){
    return view('blog');
})->name('blog');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');

// course route
Route::get('/course/create',function(){
    return view('course.create');
})->name('course_create');

Route::get('/course/list',function(){
    $courses= Course::all();
    return view('course.list',compact('courses'));
})->name('course_list');

Route::get('/course/edit',function(){
    return view('course.edit');
})->name('create_edit');

//function(Request $request) Request(request http) brings all the data comes from form /course/create and $request is a vairable to put the data on it
Route::post('/course/store',function(Request $request){
    // return $request;
    $course = new Course();
    $course->name = $request->name;
    $course->price = $request->price;
    $course->duration = $request->duration;
    $course->description = $request->description;
    $course->save();
    toast('Course created sucessful');
    return redirect()->route('course_create');
})->name('course_store');


// Get,post
//http methods
//get-read
//post-create,store,read
//put/post
//delete
// Route::get('/', [UserController::class, 'welcome'])->name('welcome');
