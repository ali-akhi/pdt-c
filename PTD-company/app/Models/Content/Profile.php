<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'fname',
        'uni',
        'bio',
        'skill',
        'diploma',
        'sex',
        'n_code',
        'birthday',
        'Province',
        'city',
        'edu_status',
        'about_me',
        'profile_photo',
    ];
}
