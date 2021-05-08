<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'email', 'name', 'phone','mailingAddress', 'Masters', 'MOrganization', 'MpassYear', 'Bachelor', 'BOrganization', 'BpassYear', 'HSC','HSCOrg',
        'HSCPass', 'SSC', 'SSCOrg', 'SSCPass', 'ielts','gre',
    ];
}
