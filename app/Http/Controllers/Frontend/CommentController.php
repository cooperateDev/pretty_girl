<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Blog;
use App\Models\Reply;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $desc = $request->desc;
        $blog_id = $request->blog_id;
        
    	if(!Auth::check()) {
    		return redirect('/blog/detail/' . $blog_id);
    	}

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            // 'name' => 'required',
            'desc' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/blog/detail/' . $blog_id)
                        ->withErrors($validator)
                        ->withInput();
        }

        Comment::create([
            'desc' => $desc,
            'blog_id' => $blog_id,
            'user_id' => Auth::user()->id
        ]);

        Blog::where('id', $blog_id)->increment('comment_cnt');
        
        return json_encode(array('success' => 'true'));
    }

    public function reply(Request $request)
    {
        $desc = $request->desc;
        $blog_id = $request->blog_id;
        $comment_id = $request->comment_id;
        
        if(!Auth::check()) {
            return redirect('/blog/detail/' . $blog_id);
        }

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            // 'name' => 'required',
            'desc' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/blog/detail/' . $blog_id)
                        ->withErrors($validator)
                        ->withInput();
        }

        Reply::create([
            'desc' => $desc,
            'comment_id' => $comment_id,
            'user_id' => Auth::user()->id
        ]);

        Blog::where('id', $blog_id)->increment('comment_cnt');
        
        return json_encode(array('success' => 'true'));
    }
}
