<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\PostComent;
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
        $comments = PostComent::where('post_id', $blog->id)->get();
        return view('Frontend.single_blog', compact('blog', 'comments'));
    }


    public function commentStore(Request $request)
    {
        PostComent::create($request->all());
        return back();
    }
}
