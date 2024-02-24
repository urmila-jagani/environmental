<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blogcontoller extends Controller
{
    public function open()
    {
        return view('frontend.blog');
    }
}
