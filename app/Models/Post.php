<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class post extends Model
{
        // Avoid misassignment
        protected $guarded = [];    
    

        // Create relationship
        public function user() {
    
    
            // every post object belongsTo a user object.
            return $this->belongsTo(User::class);
    
        }
}
