<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UploadController extends Controller
{
    public function showUploadFrom(){
        return view('uploadImage');
    }
    public function upload(Request $request){

        if($request->hasFile('fileUpload')){

            $fileName = $request->file('fileUpload')->getClientOriginalName();

            $request->file('fileUpload')->storeAs('public/images',$fileName);
            $user=Auth::user();
            $user->avatar= $fileName;
            $user->save();

            return view('uploadImage',compact('user'));
        } 
        return "no file choosen";
        
    }
}
