<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    public function Admission():HasMany{
        return $this->hasMany(Admission::class,);
    }

    public function create()
{
    $courses = Course::all();
    return view('admission.create', compact('courses'));
}
}
