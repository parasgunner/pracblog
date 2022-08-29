<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $blogs = Blog::latest()->get();
        return view('frontend.blog', compact('blogs'));


    }
        // about single vlog page
        public function singleBlog($id)
        {
            $blog = Blog::findOrFail($id);
            return view('frontend.blog', compact('blog'));
        }
}
