<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Carbon\Carbon;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderby('created_at','desc')->paginate(8);
        return view('pages/home', compact('blogs'));
    }
    public function blogbyauthor($user)
    {
        $authorblog = Blog::where('author',$user)->orderby('created_at','desc')->paginate(8);
        return view('pages/authorview', compact('authorblog'));
    }
    public function showcontent($user, $slug)
    {
        $showblog = Blog::where('slug',$slug)->first();
        return view('pages/displayblog', compact('showblog'));
    }
    public function addcomment(Request $request)
    {
        $request->validate([
            'comments' => 'required'
        ]);
        $comment = new Comment;
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comments;
        $comment->commentuser = $request->user;
        $comment->save();
        return back()->with('added','Comment Added Successfully');
    }
    public function deletecomment($id)
    {

    }
}
