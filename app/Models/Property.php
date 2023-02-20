<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Property extends Model
{
    
    use Translatable,
    SoftDeletes;

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
protected $fillable = [
    'city_id',
    'total_price',
    'price_meter',
    'location',
    'area',
    'parking',
    'rooms',
    'bedrooms',
    'bathrooms',
    'central_heating',
    'gym',
    'alarm',
    'internet',
    'is_active'
];

/**
 * The attributes that should be cast to native types.
 *
 * @var array
 */
protected $casts = [
    'central_heating',
    'gym',
    'alarm',
    'internet',
    'is_active'
];


/**
 * The accessors to append to the model's array form.
 *
 * @var array
 */


/**
 * The attributes that are translatable.
 *
 * @var array
 */
protected $translatedAttributes = ['building_age','name',  'description'];

public function city()
{
    return $this->belongsTo(City::class)->withDefault();
}


public function getActive()
{
    return  $this -> is_active  == 1 ? 'Inactive':'Active' ;
}

public function categories()
{
    return $this->belongsToMany(Category::class, 'property_categories', 'property_id', 'category_id');
}


public function images()
{
    return $this->hasMany(Image::class,'property_id');
}

public function scopeActive($query)
{
    return $query->where('is_active', 1);
}

public function getDateFormartAttribute()
{
    return $this->form_date->format('d.m.Y');
}






}
