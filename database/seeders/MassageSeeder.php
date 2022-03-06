<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use DateTime;

class MassageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('massage_tb')->insert([
            'to' => 'example@gmail.com',
            'subject' => 'I need Help',
            'massage' => 'I need help for my account',
            'email' => 'example@gmail.com',
            'date' => '02/03/2022'
        ]);
    }
}
