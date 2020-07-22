<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function profil(){
		return view('profil');
	}
 
	public function experience(){
		return view('experience');
	}
 
	public function portofolio(){
		return view('portofolio');
	}
 
}
