<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
     public function __construct()
     {
        
     }
     public function index($id='')
     {

          
          //return view('index',array('id'=>$id));
        return view('index',array('id'=>$id));


     }
     public function about()
     {
        return view('about');

     }

     public function services()
     {
        return view('services');
     }
      public function home()
     {
        return view('home');

     }



     public function session_set(Request $request)
     {

      $request->session()->put('name','shivam');

     }
     public function session_get(Request $request)
     {
      $request->session()->get('name');
      print_r($request->session()->get('name'));
     }
     public function session_remove(Request $request)
     {
      $request->session()->forget('name');
     }
     public function session_check(Request $request)
     {
      if($request->session()->has('name'))
      {
         echo "yes";
      }
      else
         echo "no";
     }
}
