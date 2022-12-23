<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteData extends Model
{
    //
    protected $fillable = [
        'company_name', 'email', 'facebook', 'instagram', 'twitter', 'whatsapp', 'photo'
    ];
}
