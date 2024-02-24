<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blog_detailscontoller extends Controller
{
    public function open()
    {
        return view('frontend.blog_details');
    }
}
