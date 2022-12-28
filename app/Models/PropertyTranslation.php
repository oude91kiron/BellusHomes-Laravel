<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTranslation extends Model
{
    protected $fillable = [       
        'name',
        'building_age',
        'description',
    ];

    public $timestamps =false;
}
