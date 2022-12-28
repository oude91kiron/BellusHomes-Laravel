<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class post extends Model
{
        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */
        protected $fillable = [

            'post_image'

    ];

        // Create relationship
        public function user() {
    
    
            // every post object belongsTo a user object.
            return $this->belongsTo(User::class);
    
        }
}
