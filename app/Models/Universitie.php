<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universitie extends Model
{
    use HasFactory;
    protected $fillable = [
        'email', 'organization', 'tagline', 'address', 'address2', 'state', 'provience', 'country', 'website', 'ReasonToStdyH',
        'history', 'education', 'research', 'career', 'StService', 'HousingService', 'LibraryService', 'CampusLife', 'SportsFacilities', 'StudentClub',
    ];
}
