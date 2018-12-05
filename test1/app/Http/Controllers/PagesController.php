<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    public function home()
    {
    	return view('home');
    }

    public function join()
    {
    	return view('join');
    }


    public function articles()
    {
    	return view('articles');
    }


    public function contact()
    {
    	return view('contact');
    }


}
