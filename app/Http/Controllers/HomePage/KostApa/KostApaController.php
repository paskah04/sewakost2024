<?php

namespace App\Http\Controllers\HomePage\KostApa;

use App\Http\Controllers\Controller;

class KostApaController extends Controller
{
    public function kostPutra()
    {
        return view('home-page.kost-apa.kost-putra');
    }

    public function kostPutri()
    {
        return view('home-page.kost-apa.kost-putri');
    }
    public function kostCampuran()
    {
        return view('home-page.kost-apa.kost-campuran');
    }
}
