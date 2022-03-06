<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CmsController extends Controller
{
    //
    public function cms(){
        return view('Admin/cms');
    }
    public function contactus(){
        return view('Admin/contactus');
    }
    public function adminprivecy(){
        $data['adminprivecy'] = DB::table('privacy_tb')
            ->select('*')
            ->first();
        return view('Admin/adminprivecy', $data);
    }

    public function editprivacy(Request $request){
        $validated = $request->validate([
            'title'            => 'required|max:255',
            'description'        => 'required',
          
        ]);        
        
        $data = array(
            'title'            => $request->input('title'),
            'description'       =>  $request->input('description'),
        );
       $update = DB::table('privacy_tb')-> update($data);
       if( $update){
            return redirect('adminprivecy')->with('status', 'Successfully Update');
       }else{
            return redirect('adminprivecy')->with('error', 'Something Went Wrong');
       }
    }



    // Banner
    public function addbanner(){
        $data['editbanner'] = DB::table('banner_tb')
                            ->select('*')
                            ->first();
        return view('Admin/addbanner', $data);
    }
    public function editbanner(Request $request){
        $validated = $request->validate([
            'name'            => 'required|max:255',
            'description'     => 'required|max:1000',
            'image'           => 'image|mimes:jpg,png,jpeg',
          
        ]);
        if($request->file('image')){
            $image_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/product-image',$image_name);
        }else{
            $image_name = $request->input('old_image');
        }
        
        
        $data = array(
            'name'            => $request->input('name'),
            'description'     =>  $request->input('description'),
            'image'           => $image_name
        );
       $update = DB::table('banner_tb')-> update($data);
       if( $update){
            return redirect('addbanner')->with('status', 'Successfully Added');
       }else{
            return redirect('addbanner')->with('error', 'Something Went Wrong');
       }
    }

    // siteidenty
    public function siteidenty(){
        
        $data['siteidenty'] = DB::table('siteidentity_tb')
                            ->select('*')
                            ->first();
        return view('Admin/siteidenty', $data);
    }
    public function editsiteidenty(Request $request){
        $validated = $request->validate([
            'email'           => 'max:50|email:rfc,dns',
            'text'            => 'max:255',
            'image'           => 'image|mimes:jpg,png,jpeg',
            'facebook'        => 'max:255',
            'twitter'         => 'max:255',
            'linkedin'        => 'max:255',
            'pinterest'       => 'max:255',
          
        ]);
        if($request->file('image')){
            $image_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/product-image',$image_name);
        }else{
            $image_name = $request->input('old_image');
        }   
        $data = array(
            'email'           => $request->input('email'),
            'text'            => $request->input('text'),
            'image'           => $image_name,
            'facebook'        => $request->input('facebook'),
            'twitter'         => $request->input('twitter'),
            'linkedin'        => $request->input('linkedin'),
            'pinterest'       => $request->input('pinterest')
        );
       $update = DB::table('siteidentity_tb')-> update($data);
       if( $update){
            return redirect('siteidenty')->with('status', 'Successfully Added');
       }else{
            return redirect('siteidenty')->with('error', 'Something Went Wrong');
       }
    }
}
