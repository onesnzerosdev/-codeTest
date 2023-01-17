<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        # code...
        $blogs = Blog::latest('id')->get();
        return view('Frontend.index', compact('blogs'));
    }


    public function single_blog(Blog $blog)
    {
        # code...
        return view('Frontend.single_blog', compact('blog'));
    }
}
