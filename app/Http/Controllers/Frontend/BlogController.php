<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
    	$blogs = Blog::all();

        return view('frontend.blog.list', [
        	'blogs' => $blogs
        ]);
    }

    public function detail(Request $request)
    {
        $id = $request->id;

        $single_blog = Blog::where('id', $id)->first();

        return view('frontend.blog.detail', [
            'single_blog' => $single_blog 
        ]);
    }

    public function createPage()
    {
        return view('frontend.blog.createPage');
    }
}
