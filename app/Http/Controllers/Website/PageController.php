<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function home(){
        $data['editbanner'] = DB::table('banner_tb')
                            ->select('*')
                            ->first();
        $data['siteidenty'] = DB::table('siteidentity_tb')
                            ->select('*')
                            ->first();
        return view('layouts/website/index', $data);
    }
    public function shop(){
        $data['siteidenty'] = DB::table('siteidentity_tb')
        ->select('*')
        ->first();
        return view('layouts/website/shop', $data);
    }
    public function cart(){
        $data['siteidenty'] = DB::table('siteidentity_tb')
        ->select('*')
        ->first();
        return view('layouts/website/cart', $data);
    }
    public function chackout(){
        $data['siteidenty'] = DB::table('siteidentity_tb')
        ->select('*')
        ->first();
        return view('layouts/website/chackout', $data);
    }
    public function contact(){
        $data['siteidenty'] = DB::table('siteidentity_tb')
                            ->select('*')
                            ->first();
        return view('layouts/website/contactus', $data);
    }
    public function privacypolicy(){
        $data['adminprivecy'] = DB::table('privacy_tb')
            ->select('*')
            ->first();
        $data['siteidenty'] = DB::table('siteidentity_tb')
                            ->select('*')
                            ->first();
        return view('layouts/website/privacypolicy', $data);
    }
    
}
