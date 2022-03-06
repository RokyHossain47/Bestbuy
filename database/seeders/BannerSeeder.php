<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('banner_tb')->insert([
            'b_name' => 'this is banner',
            'image' => '',
            'description' => 'my name is roky hossain',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
