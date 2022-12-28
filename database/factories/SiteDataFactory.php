<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SiteData;
use Faker\Generator as Faker;

$factory->define(SiteData::class, function (Faker $faker) {
    return [
        //
        'company_name' => 'Tizi Company',
        'email' => 'tizi@company.com',
        'facebook' => 'tiziFB',
        'twitter' => 'tiziTW',
        'instagram' => 'tiziIN',
        'whatsapp' => '+5356545664',
        'logo' => 'sdfsadsdadsadsafsfaddadadadsa'
    ];
});
