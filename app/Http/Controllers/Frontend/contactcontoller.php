<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactcontoller extends Controller
{
    public function open()
    {
        return view('frontend.contact');
    }
}
