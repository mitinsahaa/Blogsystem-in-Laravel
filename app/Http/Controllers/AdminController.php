<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminblog = Blog::all();
        return view('admin/home', compact('adminblog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);
            $image = $request->file('file');
            $author = $request->author;
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'),$imageName);
            $blog = new Blog;
            $blog->blogtitle = $request->title;
            $blog->blogcontent = $request->content;
            $blog->category = $request->category;
            $blog->author = $author;
            $blog->slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
            $blog->image = $imageName;
            $blog->save();
            return redirect('/admin')->with('success','Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog, $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        return view('admin/editblog', ['editblog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        $blog = Blog::find($id);
        $blog->blogtitle = $request->blogtitle;
        $blog->blogcontent = $request->blogcontent;
        $blog->slug = SlugService::createSlug(Blog::class, 'slug', $request->blogtitle);
        $blog->save();
        return redirect('/admin')->with('success',"Post Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/admin')->with('success','Post Deleted Successfully');
    }
    
}
