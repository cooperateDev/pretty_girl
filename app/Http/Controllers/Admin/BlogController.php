<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
    	$blogs = Blog::orderBy('updated_at', 'desc')->get();

        return view('admin.blog.list', [
        	'blogs' => $blogs
        ]);
    }

    public function getBlog(Request $request)
    {
    	$id = $request->id;

    	$blog = Blog::where('id', $id)->first();

        return view('admin.blog.edit', [
        	'blog' => $blog
        ]);
    }

    public function delete(Request $request)
    {
    	$id = $request->id;

    	Blog::where('id', $id)->delete();

        return redirect('admin/blog');
    }
}
