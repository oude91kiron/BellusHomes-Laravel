<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SiteData;
use Faker\Generator as Faker;

$factory->define(SiteData::class, function (Faker $faker) {
    return [
        //
        'company_name' => ' bellus homes',
        'email' => 'info@ bellushomes.com',
        'facebook' => ' bellushomes.fb',
        'instagram' => 'bellushomes.in',
        'twitter' => 'bellushomes.tw',
        'whatsapp' => '+905235654566',
        'logo' => 'dsakdjsaşlkfjsaklfjaslkdjsaldkjsaşldklfdsa',
    ];
});
