<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function chisiamo()
    {
        return view('chiSiamo');
    }

    public function contattaci()
    {
        return view('contattaci');
    }
}
