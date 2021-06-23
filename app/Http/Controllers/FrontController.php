<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function contactUs()
    {
        return view('front.contact_us.index');
    }
}
