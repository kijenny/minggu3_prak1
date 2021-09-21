<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sarnacontroller extends Controller
{
    public function kantor(){
        return view ('kantor');
    }

    public function lab(){
        return view ('lab');
    }

    public function kelas(){
        return view ('kelas');
    }

    public function lain(){
        return view ('lain');
    }
}