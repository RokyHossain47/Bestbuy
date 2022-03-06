<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MassageController extends Controller
{
    //
    public function massage(){
        $data['massage'] = DB::table('massage_tb')
                                ->select('*')
                                ->first();
        return view('Admin/massage', $data);
    }
    public function sendmassage(Request $request){
        $validated = $request->validate([
            'email'         => 'required | max:255',
            'subject'       => 'required | max:255',
            'massage'       => 'required | max:255',
          
        ]);        
        
        $data = array(
            'email'            => $request->input('email'),
            'subject'       => $request->input('subject'),
            'massage'       => $request->input('massage'),
        );
       $update = DB::table('massage_tb')-> insert($data);
       if( $update){
            return redirect('contact')->with('status', 'Send Massage Successfully');
       }else{
            return redirect('contact')->with('error', 'Massage Not send');
       }
    }
}
