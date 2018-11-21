<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view('pages.home');
    }

    public function contact(){
    	return view('pages.contact');
    }

    public function addUser(){
    	return view('pages.addUser');	
    }
}
