<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){
    return view("course.create");
}
    public function list(){
    $courses= Course::all();
    return view("course.list",compact("courses"));
}
    public function store(Request $request){
    // return $request;
    $course = new Course();
    $course->name = $request->name;
    $course->price = $request->price;
    $course->duration = $request->duration;
    $course->description = $request->description;
    $course->save();
    toast("Course saved", "sucessful");
    return redirect()->back();
}
    public function edit ($id){
    $course = Course::find($id);
    return view("course.edit",compact('course'));
}
    public function delete($id){
    $course = Course::find($id);
    $course->delete();
    toast("Course deleted", "sucess");
    return redirect()->back();
}
    public function update(Request $request,$id){
    // return $request;
    $course = Course::find($id);
    $course->name = $request->name;
    $course->price = $request->price;
    $course->duration = $request->duration;
    $course->description = $request->description;
    $course->save();
    toast("Course updated sucessful");
    return redirect()->route('course_create');
}
}
