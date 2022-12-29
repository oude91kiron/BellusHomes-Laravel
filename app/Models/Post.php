<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class post extends Model
{

        use Translatable;
    
        /**
         * The relations to eager load on every query.
         *
         * @var array
         */
        protected $with = ['translations'];
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */
        protected $fillable = [

            'post_image'

    ];

    public $translatedAttributes =[
        'title', 
        'headline', 
        'paragraph', 
        'firstSubhead', 
        'secondParagraph', 
        'secondHeadline', 
        'thirdParagraph', 
        'categories', 
        'tags'
    ];


        // Create relationship
        public function user() {
    
    
            // every post object belongsTo a user object.
            return $this->belongsTo(User::class);
    
        }
}
