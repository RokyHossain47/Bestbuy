<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function appsetting(){
        return view('Admin/appsetting');
    }
    public function smssetting(){
        return view('Admin/smssetting');
    }
    public function emailgatway(){
        return view('Admin/emailgatway');
    }

}
