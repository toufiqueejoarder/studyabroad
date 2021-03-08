<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'course',
        'program', 'discipline', 'delivery', 'duration', 'study_status', 'about', 'fees', 'apply_start', 'apply_end', 'language', 'Overview', 'program_structure',
        'academic_requirement', 'english_requirement', 'other_requirement', 'funding', 'visa', 'work_permit',
    ];
}
