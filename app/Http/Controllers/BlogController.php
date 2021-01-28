<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Cat;
use App\Models\Homelabs;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Homelabs::all();
        $banner = Banner::all();
        $blog = Blog::all();
        return view('pages.blog',compact('datas','banner','blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Blog::all();
        $tag = Tag::all();
        $cat = Cat::all();
        return view('backend.blogB',compact('blog','tag','cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->texte = $request->texte;
        $blog->titre = $request->titre;
        $blog->src = $request->file('src')->hashName();
        $blog->save();
        $blog->tag()->sync($request->tag);
        $blog->cat()->sync($request->cat);
        $request->file('src')->storePublicly('img/blog/','public');
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $tag = Tag::all();
        $cat = Cat::all();


        return view('backend.blog-postBE',compact('blog','tag','cat'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $blog = Blog::find($id);
        $blog->texte = $request->texte;
        $blog->titre = $request->titre;
        $blog->src = $request->file('src')->hashName();
        $blog->save();
        $blog->tag()->sync($request->tag);
        $blog->cat()->sync($request->cat);
        $request->file('src')->storePublicly('img/blog/','public');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
