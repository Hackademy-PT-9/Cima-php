<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome', ['books' => Book::all()]);
    }
    public function inseriscilibro()
    {
        return view('insertbook');
    }

    public function storebook(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'pages'=>'required'
        ]);
        Book::create([
            'title'=>$request->title,
            'pages'=>$request->pages

    ]);
        return view('insertbook');
    }
}
