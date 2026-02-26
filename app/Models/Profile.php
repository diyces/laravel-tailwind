<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'full_name',
        'headline',
        'bio',
        'avatar_path',
        'github_url',
        'linkedin_url',
        'cv_path',
    ];
}