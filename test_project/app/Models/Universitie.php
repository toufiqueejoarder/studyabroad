<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universitie extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'tagline',
        'address',
        'address2',
        'state',
        'provience',
        'country',
        'website',
    ];
}
