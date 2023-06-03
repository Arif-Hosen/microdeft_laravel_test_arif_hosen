<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'id',
        'name',
        'class',
        'date_of_birth',
        'student_image',
        'department_id'
    ];
}
