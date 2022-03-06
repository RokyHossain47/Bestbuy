<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminprofile(){
        $data['admin'] = DB::table('admin')
                            ->select('admin.*')
                            ->where('status', 1)
                            ->first();
        return view('Admin/adminprofile', $data);
    }
}
