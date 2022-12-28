<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [

            'post_id',
            'title',
            'headline',
            'paragraph',
            'firstSubhead',
            'secondParagraph',
            'secondHeadline',
            'thirdParagraph',
            'categories',
            'tags',

    ];
}
