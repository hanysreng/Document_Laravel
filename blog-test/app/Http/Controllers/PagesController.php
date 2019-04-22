<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

 

   public function index(){
       $testValue= 'helo wep2019';
    //    return view("page.index",compact('testValue'));

   }
   public function about(){
       return view("page.about");
   }
   public function service(){
       $data = array('title'=>'this is service page','service'=>['PHP','Programming','jquery','Designer','PHP advands']);
        return view('page.index')->with('data',$data);

    // return view("page.service");
}

public function customer(){
    $data = array(
        '0'=>array('id'=>1,'name'=>'Chandaraty','email'=>'Chandaraty@example.org'),
        '1'=>array('id'=>2,'name'=>'Maly','email'=>'mary@example.org'),
        '2'=>array('id'=>3,'name'=>'Samphas','email'=>'samphas@example.org'),
        '3'=>array('id'=>4,'name'=>'Donat','email'=>'donet@example.org'),
    );
    return view("page.customer")->with('data',$data);  
 
}



}

