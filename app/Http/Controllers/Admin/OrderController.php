<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function neworder(){
        return view('Admin/neworder');
    }
    public function manageorder(){
        return view('Admin/manageorder');
    }
}
