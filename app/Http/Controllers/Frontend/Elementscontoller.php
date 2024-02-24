<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Elementscontoller extends Controller
{
    public function open()
    {
        return view('frontend.elements');
    }
}
