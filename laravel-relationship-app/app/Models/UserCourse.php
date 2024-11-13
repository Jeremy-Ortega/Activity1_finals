<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserCourse extends Pivot
{
    protected $fillable = [
        'user_id',
        'course_id',
    ];
}
?>