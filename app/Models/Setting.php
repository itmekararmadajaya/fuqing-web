<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'header_image',
        'address',
        'google_maps_link',
        'contact_person',
        'instagram',
        'gdrive_link'
    ];
}
