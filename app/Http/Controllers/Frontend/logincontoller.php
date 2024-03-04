<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logincontoller extends Controller
{
    public function open()
    {
        return view('frontend.login');
    }
}
