<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Siteidentity_tb')->insert([
            'email' => 'example@gmail.com',
            'text' => '50% off on your first purches',
            'image' => '',
            'phone' => '+231565124',
            'time' => '24/7 Support',
            'facebook' => 'https://www.facebook.com',
            'twitter' => 'https://www.twitter.com',
            'linkedin' => 'https://www.linkedin.com',           
            'pinterest' => 'https://www.prinerest.com',           
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
