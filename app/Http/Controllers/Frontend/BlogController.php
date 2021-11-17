<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $page_cnt = 12;
    	$blogs = Blog::leftjoin('users', 'blogs.user_id', 'users.id')
                ->select('blogs.*', 'users.name')
                ->paginate($page_cnt);

        return view('frontend.blog.list', [
        	'blogs' => $blogs
        ]);
    }

    public function detail(Request $request)
    {
        $id = $request->id;

        Blog::where('id', $id)->increment('read_cnt');

        $single_blog = Blog::where('blogs.id', $id)
                        ->leftjoin('users', 'users.id', 'blogs.user_id')
                        ->select('blogs.*', 'users.name')
                        ->first();
        $comments = Comment::where('blog_id', $id)
                    ->leftjoin('users', 'comments.user_id', 'users.id')
                    ->leftjoin('replies', 'comments.id', 'replies.comment_id')
                    ->leftjoin('users as u', 'comments.user_id', 'u.id')
                    ->select('comments.*', 'users.name as comment_name', 'users.avatar as comment_avatar', 'u.name as reply_name', 'u.avatar as reply_avatar', 'replies.desc as reply_desc', 'replies.updated_at as reply_updated_at')
                    ->orderBy('comments.id', 'asc')
                    ->get();
        $latests = Blog::orderBy('updated_at', 'desc')->get()->skip(0)->take(10);
        $populars = Blog::orderBy('read_cnt', 'desc')->get()->skip(0)->take(10);

        return view('frontend.blog.detail', [
            'single_blog' => $single_blog,
            'comments' => $comments,
            'populars' => $populars,
            'latests' => $latests
        ]);
    }

    public function create_page()
    {
        return view('frontend.blog.create');
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $desc = $request->desc;

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/blog/create_page')
                        ->withErrors($validator)
                        ->withInput();
        }

        $image = "";

        if($_FILES["file"]["name"]) {
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            $image = time() . '_' . $_FILES["file"]["name"];

            if (file_exists("upload/images/blog/" . $image)) 
                unlink("upload/images/blog/" . $image);
       
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/images/blog/" . $image);
        }

        Blog::create([
            'title' => $title,
            'desc' => $desc,
            'img_url' => $image,
            'user_id' => Auth::user()->id
        ]);
        
        return redirect('/blog');
    }

    public function edit_page(Request $request)
    {
        $id = $request->id;
        $single_blog = Blog::where('id', $id)->first();

        return view('frontend.blog.edit', [
            'single_blog' => $single_blog
        ]);
    }

    public function update(Request $request)
    {
        $title = $request->title;
        $desc = $request->desc;
        $id = $request->id;

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/blog/edit/' . $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $image = "";

        if($_FILES["file"]["name"]) {
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            $image = time() . '_' . $_FILES["file"]["name"];

            if (file_exists("upload/images/blog/" . $image)) 
                unlink("upload/images/blog/" . $image);
       
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/images/blog/" . $image);
        }

        if($image != '')
            Blog::where('id', $id)->update([
                'title' => $title,
                'desc' => $desc,
                'img_url' => $image,
                'user_id' => Auth::user()->id
            ]);
        else
            Blog::where('id', $id)->update([
                'title' => $title,
                'desc' => $desc,
                'user_id' => Auth::user()->id
            ]);
        
        return redirect('/blog/detail/' . $id);
    }
}
