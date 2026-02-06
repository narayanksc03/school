<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Admission extends Model
{

    public function course(): BelongsTo

    {
        return $this->belongsTo(Course::class,);
    }
}
