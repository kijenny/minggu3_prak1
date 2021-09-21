<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studycontroller extends Controller
{
    public function ti(){
        return view ('TI');
    }

    public function mi(){
        return view ('MI');
    }
}