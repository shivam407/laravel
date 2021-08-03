<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form1 extends Controller
{
	public function __construct()
	{

	}
	public function index(Request $request)
	{
		$request->validate([
			'name'=>'required',
			'email'=>'required|email'
		]);
		return redirect('welcome1');
		
	}
    
}
