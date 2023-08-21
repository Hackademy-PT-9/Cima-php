<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage() {
        return view('homepage');
    }
    

    public function chisiamo() {
    return view('chisiamo');
}

    public function contatti() {
    return view('contatti');
}

}


