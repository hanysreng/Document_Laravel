<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\SendMail;
use App\Mail\Upload;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //  //   $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function sendEmail(){
    
        Mail::to('hany.sreng@student.passerellesnumeriques.org')->send(new SendMail());
        return "Email is already sent";
  }


   
}
