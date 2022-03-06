<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use DateTime;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('privacy_tb')->insert([
            'title' => 'Privecy Policy',
            'description' => 'my name is roky hossain',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
