<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use DateTime;

class ContactUs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactus_tb')->insert([
            'to' => 'Send Email',
            'subject' => 'Subject',
            'massage' => 'my name is roky hossain',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
