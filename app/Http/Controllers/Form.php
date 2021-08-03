<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
     public function __construct()
     {

     }
     public function index(Request $request)
     {
        echo "submitted";
       //print_r($request->post());
       // print_r($request->input('name'));
        print_r($request->path());
     }
}
