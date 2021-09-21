<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentcontroller extends Controller
{
    public function comment($nama,$pesan){
        return view ('comment', ['nama' => $nama, 'pesan' => $pesan]);
    }
}