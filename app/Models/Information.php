<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'author',
        'create_date',
        'status',
    ];
}
