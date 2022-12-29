<?php

use Illuminate\Database\Seeder;
use App\Models\SiteData;

class SiteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(SiteData::class,1)->create();

    }
}
