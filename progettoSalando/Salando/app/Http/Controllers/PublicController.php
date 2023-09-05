<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about()
    {
            return view('about');
    }
    public function contact()
    {
            return view('contact');
    }
    public function pricing()
    {
            return view('pricing');
    }
    public function faq()
    {
            return view('faq');
    }
}
